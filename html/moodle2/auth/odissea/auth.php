<?php

/**
 * @author Sara Arjona
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package moodle multiauth
 *
 * Authentication Plugin: Odissea Authentication
 *
 * Authentication for Odissea Moodle. Let authenticate users against XTEC's LDAP,
 * using the identity card like username. In the future will also let connect to GICAR
 *
 */

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->libdir.'/authlib.php');
require_once($CFG->libdir.'/ldaplib.php');

/**
 * Plugin for no authentication.
 */
class auth_plugin_odissea extends auth_plugin_base {

    /**
     * Constructor.
     */
    function auth_plugin_odissea() {
        $this->authtype = 'odissea';
        $this->pluginconfig = 'auth/'.$this->authtype;
        $this->config = get_config($this->pluginconfig);
        $this->errorlogtag = '[AUTH ODISSEA] ';

        if (empty($this->config->objectclass)) {
            // Can't send empty filter
            $this->config->objectclass = '(objectClass=*)';
        }
    }

    /**
     * Returns true if the username and password work or don't exist and false
     * if the user exists and the password is wrong.
     *
     * @param string $username The username
     * @param string $password The password
     * @return bool Authentication success or failure.
     */
    function user_login ($username, $password) {
        if (! function_exists('ldap_bind')) {
            print_error('auth_ldapnotinstalled', 'auth_ldap');
            return false;
        }

	$ldapconnection = $this->get_ldapconnection($username, $password);

        $ldap_user_dn = $this->ldap_find_userdn($ldapconnection, $username);
 
        // If ldap_user_dn is empty, user does not exist
        if (!$ldap_user_dn) {
            $this->ldap_close();
            return false;
        }

        // Try to bind with current username and password
        $ldap_login = @ldap_bind($ldapconnection, $ldap_user_dn, $password);
        $this->ldap_close();
        if ($ldap_login) {
            return true;
        }
        return false;
    }

    function get_ldapconnection($username, $password){
        $bind_dn = "cn=".$username.",".$this->config->bind_dn;
	$ldapconnection = $this->ldap_connect($bind_dn, $password);

        return $ldapconnection;
    }
    
    
    /**
     * Reads user information from external authentication server and returns it in array()
     * Function should return all information available. 
     *
     * @param string $username username
     *
     * @return mixed array with no magic quotes or false on error
     */
    function get_userinfo($username, $password = '') {
	$ldapconnection = $this->get_ldapconnection($username, $password);

        if(!($user_dn = $this->ldap_find_userdn($ldapconnection, $username))) {
            $this->ldap_close();
            return false;
        }

        //$search_attribs = array('givenname','sn','mail','nif','cn');
        //$attrmap_old = array('firstname' => 'givenname', 'lastname' => 'sn', 'email' => 'mail', 'username' => 'nif');
        $search_attribs = array();
        $attrmap = $this->odissea_attributes();
        foreach ($attrmap as $key => $values) {
            if (!is_array($values)) {
                $values = array($values);
            }
            foreach ($values as $value) {
                if (!in_array($value, $search_attribs)) {
                    array_push($search_attribs, $value);
                }
            }
        }
        
        if (!$user_info_result = ldap_read($ldapconnection, $user_dn, '(objectClass=*)', $search_attribs)) {
            $this->ldap_close();
            return false; // error!
        }

        $user_entry = ldap_get_entries_moodle($ldapconnection, $user_info_result);
        if (empty($user_entry)) {
            $this->ldap_close();
            return false; // entry not found
        }

        $result = array();
        foreach ($attrmap as $key => $values) {
            if (!is_array($values)) {
                $values = array($values);
            }
            $ldapval = NULL;
            foreach ($values as $value) {
                $entry = array_change_key_case($user_entry[0], CASE_LOWER);
                if (($value == 'dn') || ($value == 'distinguishedname')) {
                    $result[$key] = $user_dn;
                    continue;
                }
                if (!array_key_exists($value, $entry)) {
                    continue; // wrong data mapping!
                }
                if (is_array($entry[$value])) {
                    $newval = textlib::convert($entry[$value][0], $this->config->ldapencoding, 'utf-8');
                } else {
                    $newval = textlib::convert($entry[$value], $this->config->ldapencoding, 'utf-8');
                }
                if (!empty($newval)) { // favour ldap entries that are set
                    $ldapval = $newval;
                }
            }
            if (!is_null($ldapval)) {
                $result[$key] = $ldapval;
            }
        }

        $this->ldap_close();
        return $result;
    }
    
    function prevent_local_passwords() {
        return true;
    }

    /**
     * Returns true if this authentication plugin is 'internal'.
     *
     * @return bool
     */
    function is_internal() {
        return false;
    }

    /**
     * Returns true if this authentication plugin can change the user's
     * password.
     *
     * @return bool
     */
    function can_change_password() {
        return false;
    }

    /**
     * Returns the URL for changing the user's pw, or empty if the default can
     * be used.
     *
     * @return moodle_url
     */
    function change_password_url() {
        return null;
    }

    /**
     * Returns true if plugin allows resetting of internal password.
     *
     * @return bool
     */
    function can_reset_password() {
        return false;
    }

    /**
     * Prints a form for configuring this authentication plugin.
     *
     * This function is called from admin/auth.php, and outputs a full page with
     * a form for configuring this plugin.
     *
     * @param array $page An object containing all the data for this page.
     */
    function config_form($config, $err, $user_fields) {
        global $CFG, $OUTPUT;

        if (!function_exists('ldap_connect')) { // Is php-ldap really there?
            echo $OUTPUT->notification(get_string('auth_ldap_noextension', 'auth_ldap'));
            return;
        }

        include('config.html');
    }

    /**
     * Processes and stores configuration data for this authentication plugin.
     */
    function process_config($config) {
        // Set to defaults if undefined
        if (!isset($config->host_url)) {
             $config->host_url = '';
        }
        if (empty($config->ldapencoding)) {
         $config->ldapencoding = 'utf-8';
        }
        if (!isset($config->ldap_version)) {
            $config->ldap_version = '3';
        }
        if (!isset($config->user_type)) {
             $config->user_type = 'default';
        }
        if (!isset($config->opt_deref)) {
             $config->opt_deref = LDAP_DEREF_NEVER;
        }
        if (empty($config->user_attribute)) {
             $config->user_attribute = 'cn';
        }
        if (empty($config->nif_attribute)) {
             $config->nif_attribute = 'nif';
        }
        if (!isset($config->search_sub)) {
             $config->search_sub = '';
        }
        if (!isset($config->contexts)) {
             $config->contexts = '';
        }
        if (!isset($config->bind_dn)) {
            $config->bind_dn = '';
        }
        if (!isset($config->bind_pw)) {
            $config->bind_pw = '';
        }

        // Try to remove duplicates before storing the contexts (to avoid problems in sync_users()).
        $config->contexts = explode(';', $config->contexts);
        $config->contexts = array_map(create_function('$x', 'return textlib::strtolower(trim($x));'),
                                      $config->contexts);
        $config->contexts = implode(';', array_unique($config->contexts));

        // Save settings
        set_config('host_url', trim($config->host_url), $this->pluginconfig);
        set_config('ldapencoding', trim($config->ldapencoding), $this->pluginconfig);
        set_config('ldap_version', $config->ldap_version, $this->pluginconfig);
        set_config('user_type', textlib::strtolower(trim($config->user_type)), $this->pluginconfig);
        set_config('opt_deref', $config->opt_deref, $this->pluginconfig);
        set_config('user_attribute', textlib::strtolower(trim($config->user_attribute)), $this->pluginconfig);
        set_config('nif_attribute', textlib::strtolower(trim($config->nif_attribute)), $this->pluginconfig);
        set_config('search_sub', $config->search_sub, $this->pluginconfig);
        set_config('contexts', $config->contexts, $this->pluginconfig);
        set_config('bind_dn', trim($config->bind_dn), $this->pluginconfig);
        set_config('bind_pw', $config->bind_pw, $this->pluginconfig);
        
        return true;
    }
    
    /**
     * Connect to the LDAP server, using the plugin configured
     * settings. It's actually a wrapper around ldap_connect_moodle()
     *
     * @return resource A valid LDAP connection (or dies if it can't connect)
     */
    function ldap_connect($binddn='', $bindpwd='') {
        global $CFG;
        // Cache ldap connections. They are expensive to set up
        // and can drain the TCP/IP ressources on the server if we
        // are syncing a lot of users (as we try to open a new connection
        // to get the user details). This is the least invasive way
        // to reuse existing connections without greater code surgery.
        if(!empty($this->ldapconnection)) {
            $this->ldapconns++;
            return $this->ldapconnection;
        }

        if ($binddn == '' and $bindpwd == '') {
            if (!empty($this->config->bind_dn)) {
               $binddn = $this->config->bind_dn;
            }
            if (!empty($this->config->bind_pw)) {
               $bindpwd = $this->config->bind_pw;
            }
        }

        if($ldapconnection = ldap_connect_moodle($this->config->host_url, $this->config->ldap_version,
                                                 $this->config->user_type, $binddn,
                                                 $bindpwd, $this->config->opt_deref,
                                                 $debuginfo)) {
            $this->ldapconns = 1;
            $this->ldapconnection = $ldapconnection;
            return $ldapconnection;
        }

        if ($bindpwd != '' && $CFG->debugdisplay) {
            print_error('auth_ldap_noconnect_all', 'auth_ldap', '', $debuginfo);
        }
    }

    /**
     * Disconnects from a LDAP server
     *
     * @param force boolean Forces closing the real connection to the LDAP server, ignoring any
     *                      cached connections. This is needed when we've used paged results
     *                      and want to use normal results again.
     */
    function ldap_close($force=false) {
        $this->ldapconns--;
        if (($this->ldapconns == 0) || ($force)) {
            $this->ldapconns = 0;
            @ldap_close($this->ldapconnection);
            unset($this->ldapconnection);
        }
    }

    /**
     * Search specified contexts for username and return the user dn
     * like: cn=username,ou=suborg,o=org. It's actually a wrapper
     * around ldap_find_userdn().
     *
     * @param resource $ldapconnection a valid LDAP connection
     * @param string $extusername the username to search (in external LDAP encoding, no db slashes)
     * @return mixed the user dn (external LDAP encoding) or false
     */
    function ldap_find_userdn($ldapconnection, $extusername) {
        $ldap_contexts = explode(';', $this->config->contexts);
        if (!empty($this->config->create_context)) {
            array_push($ldap_contexts, $this->config->create_context);
        }
        return ldap_find_userdn($ldapconnection, $extusername, $ldap_contexts, $this->config->objectclass,
                                $this->config->user_attribute, $this->config->search_sub);
    }

    /**
     * Returns user attribute mappings between moodle and LDAP
     *
     * @return array
     */
    function odissea_attributes () {
        $moodleattributes = array();
        foreach ($this->userfields as $field) {
            if (!empty($this->config->{"field_map_$field"})) {
                $moodleattributes[$field] = textlib::strtolower(trim($this->config->{"field_map_$field"}));
                if (preg_match('/,/', $moodleattributes[$field])) {
                    $moodleattributes[$field] = explode(',', $moodleattributes[$field]); // split ?
                }
            }
        }
        $moodleattributes['username'] = textlib::strtolower(trim($this->config->nif_attribute));
        return $moodleattributes;
    }
    

}
