<?PHP 
	header('Content-Type: text/xml; charset=utf-8');
/////////////////////////////////////////////////////////////////////////////////
///  EOICampus login service
///  Author: Sara Arjona Tellez (sara.arjona@gmail.com)
/////////////////////////////////////////////////////////////////////////////////

  require_once("../../../config.php");
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	echo '<'.'?xml version="1.0" encoding="UTF-8"?'.'>';
  if ($user=get_record('user', 'username', $username, 'password', $password)){
  	$courseid = $_REQUEST['courseid'];
  	echo "<login success=\"yes\" username=\"$username\" password=\"$password\" firstname=\"$user->firstname\" lastname=\"$user->lastname\" email=\"$user->email\" courseid=\"$courseid\" />";  
  }else{
	  echo "<login success=\"no\" username=\"$username\"/>";  
  }

/*	
$courseid = $_REQUEST['courseid'];
$course=get_record('course', 'shortname', $courseid);	
$cm = get_record("course_modules", "id", $course->id);
$context = get_context_instance(CONTEXT_MODULE, $cm->id);
$currentgroup = get_and_set_current_group($course, groupmode($course, $cm));
$users = get_users_by_capability($context, 'mod/eoicampus:view', 'u.id, u.id', '', '', '', $currentgroup, '', false);

echo "current=".$currentgroup;
print_r($users);
*/
/** TODO: Check that the user is enroled in specified courseid and return also its role in this course **/	

?>
