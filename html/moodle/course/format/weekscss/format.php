<?php // $Id: format.php,v 1.24.2.5 2008/12/10 06:05:27 dongsheng Exp $
      // Display the whole course as "weeks" made of of modules
      // Included from "view.php"
/**
 * Evaluation weekly format for course display - NO layout tables, for accessibility, etc.
 * 
 * A duplicate course format to enable the Moodle development team to evaluate 
 * CSS for the multi-column layout in place of layout tables. 
 * Less risk for the Moodle 1.6 beta release.
 *   1. Straight copy of weeks/format.php
 *   2. Replace <table> and <td> with DIVs; inline styles.
 *   3. Reorder columns so that in linear view content is first then blocks;
 * styles to maintain original graphical (side by side) view.
 *
 * Target: 3-column graphical view using relative widths for pixel screen sizes 
 * 800x600, 1024x768... on IE6, Firefox. Below 800 columns will shift downwards.
 * 
 * http://www.maxdesign.com.au/presentation/em/ Ideal length for content.
 * http://www.svendtofte.com/code/max_width_in_ie/ Max width in IE.
 *
 * @copyright &copy; 2006 The Open University
 * @author N.D.Freear@open.ac.uk, and others.
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package  
 */
//TODO (nfreear): Accessibility: evaluation, lang/en_utf8/moodle.php: $string['formatweekscss']

    $week = optional_param('week', -1, PARAM_INT);

    if ($week != -1) {
        $displaysection = course_set_display($course->id, $week);
    } else {
        if (isset($USER->display[$course->id])) {
            $displaysection = $USER->display[$course->id];
        } else {
            $displaysection = course_set_display($course->id, 0);
        }
		//XTEC ************ AFEGIT - To show only current topic
		//2010.06.30 @pferre22
    	$context = get_context_instance(CONTEXT_COURSE, $course->id);
    	if($course->navigationbar == 0){
			if(!has_capability('moodle/grade:edit', $context)){
				//Students or guests, only show current topic or all.
				$timenow = time();
				$weekofseconds = 604800;
				$current_week = ceil(($timenow - $course->startdate - 7200) / $weekofseconds);
				
				if($current_week > 0 && $current_week <= $course->numsections) 
					$displaysection = course_set_display($course->id, $current_week);
				else
					$displaysection = course_set_display($course->id, -2);
			}
    	}
    	//************ FI
    }

    $streditsummary  = get_string('editsummary');
    $stradd          = get_string('add');
    $stractivities   = get_string('activities');
    $strshowallweeks = get_string('showallweeks');
    $strweek         = get_string('week');
    $strgroups       = get_string('groups');
    $strgroupmy      = get_string('groupmy');
    $editing         = $PAGE->user_is_editing();
    //XTEC ************ AFEGIT - To remove warning "Undefined variable: strshowonlytopic" (line 137)
	//2010.06.30 @pferre22
    $strshowonlytopic = get_string('showonlytopic', '', $section);
    $strshowalltopics = get_string('showall');
    $strgrades = get_string('grades');
    //************ FI

    if ($editing) {
        $strstudents = moodle_strtolower($course->students);
        $strweekhide = get_string('weekhide', '', $strstudents);
        $strweekshow = get_string('weekshow', '', $strstudents);
        $strmoveup   = get_string('moveup');
        $strmovedown = get_string('movedown');
    }

    $context = get_context_instance(CONTEXT_COURSE, $course->id);
/* Internet Explorer min-width fix. (See theme/standard/styles_layout.css: min-width for Firefox.)
   Window width: 800px, Firefox 763px, IE 752px. (Window width: 640px, Firefox 602px, IE 588px.)    
*/
?>

<!--[if IE]>
  <style type="text/css">
  .weekscss-format { width: expression(document.body.clientWidth < 800 ? "752px" : "auto"); }
  </style>
<![endif]-->
<?php
/// Layout the whole page as three big columns (was, id="layout-table")
    echo '<div class="weekscss-format">';
       

/// The left column ...

    if (blocks_have_content($pageblocks, BLOCK_POS_LEFT) || $editing) {
        echo '<div id="left-column">';
        blocks_print_group($PAGE, $pageblocks, BLOCK_POS_LEFT);
        echo '</div>';
    }
    
/// The right column, BEFORE the middle-column.
    if (blocks_have_content($pageblocks, BLOCK_POS_RIGHT) || $editing) {
        echo '<div id="right-column">';
        blocks_print_group($PAGE, $pageblocks, BLOCK_POS_RIGHT);
        echo '</div>';
    }

/// Start main column


	//XTEC ************ MODIFICAT - To hide blocks for students
	//2010.06.30 @pferre22
	if(has_capability('moodle/site:manageblocks', $context) || has_capability('moodle/grade:edit', $context)){
		//Show blocks to editors
		echo '<div id="middle-column">'. skip_main_destination();
	}
	else if($course->showblocks == 0 &&  isset($CFG->hideblockstostudents) && !$CFG->hideblockstostudents){
		//Show blocks defined by site
		echo '<div id="middle-column">'. skip_main_destination();
	}
	else if($course->showblocks == 1){
		//Show blocks defined by course
		echo '<div id="middle-column">'. skip_main_destination();
	}
	else{
		//Don't show blocks
		echo '<div id="middle-column" style="margin-left:1em; margin-right:1em;">'. skip_main_destination();
	}
	//************ ORIGINAL
	//echo '<div id="middle-column">'. skip_main_destination();
	//******** FI

    print_heading_block(get_string('weeklyoutline'), 'outline');

    // Note, an ordered list would confuse - "1" could be the clipboard or summary.
    echo "<ul class='weekscss'>\n";

/// If currently moving a file then show the current clipboard
    if (ismoving($course->id)) {
        $stractivityclipboard = strip_tags(get_string('activityclipboard', '', addslashes($USER->activitycopyname)));
        $strcancel= get_string('cancel');
        echo '<li class="clipboard">';
        echo $stractivityclipboard.'&nbsp;&nbsp;(<a href="mod.php?cancelcopy=true&amp;sesskey='.$USER->sesskey.'">'.$strcancel.'</a>)';
        echo "</li>\n";
    }

    //XTEC ************ AFEGIT - To show an index of themes/weeks
    //2010.06.30 @pferre22
    //INICI 1
	if($course->navigationbar <= 1){
		echo '<li id="section-index" class="section main index" >';
		echo '<div class="right side" >&nbsp;</div>'; 
		echo '<div class="content">';
		
		if($course->gradesonnav){
			//Show reports
			$reportavailable = false;
			if (has_capability('moodle/grade:viewall', $context)) {
				$reportavailable = true;
			} else if (!empty($course->showgrades)) {
				if ($reports = get_list_of_plugins('grade/report')) {     // Get all installed reports
					arsort($reports); // user is last, we want to test it first
					foreach ($reports as $plugin) {
						if (has_capability('gradereport/'.$plugin.':view', $context)) {
							//stop when the first visible plugin is found
							$reportavailable = true;
							break;
						}
					}
				}
			}
			if ($reportavailable) {
				echo '<img src="'.$CFG->pixpath.'/i/grades.gif" class="icon" alt="" /><a href="'.$CFG->wwwroot.'/grade/report/index.php?id='.$course->id.'">'.get_string('grades').'</a><br/>';
			}
		}
		
    //XTEC ************ MODIFICAT - Better control of the index of themes 
    //2011.02.03 @jfern343
    //INICI 2
        if (!isset($course->topicsonnav) || $course->topicsonnav) { //Show all themes?
            echo '<a href="view.php?id=' . $course->id . '&amp;topic=0#section-' . $section . '" title="' . $strshowalltopics . '">' . get_string('showall') . '</a>';

            if (!isset($course->topicslistonnav) || $course->topicslistonnav)
                echo '-';
        }

        if (!isset($course->topicslistonnav) || $course->topicslistonnav) { //Show the index of themes?
            for($i=1; $i <= $course->numsections; $i++) {
                    if($displaysection == $i)
                    echo '<b style="margin-left: 4px; margin-right:4px;">'.$i.'</b> ';
                    else
                    echo '<a style="margin-left: 4px; margin-right:4px;" href="view.php?id='.$course->id.'&amp;topic='.$i.'" title="'.$strshowonlytopic.'">'.$i.'</a> ';
            }
        }
        //************ ORIGINAL
        /*
		if(!empty($displaysection) && $displaysection > 0)
			echo '<a href="view.php?id='.$course->id.'&amp;week=0#section-'.$section.'" title="'.$strshowalltopics.'">'.
				 get_string('showall').'</a> - ';
		else
			echo '<b style="margin-right:4px;">'.get_string('showall').'</b> - ';
		for($i=1; $i <= $course->numsections; $i++) {
			if($displaysection == $i)
				echo '<b style="margin-left: 4px; margin-right:4px;">'.$i.'</b> ';
			else
				echo '<a style="margin-left: 4px; margin-right:4px;" href="view.php?id='.$course->id.'&amp;week='.$i.'" title="'.$strshowonlytopic.'">'.$i.'</a> ';
		}
        */
    //************ FI 2
                
                

		echo '</div>';
		echo "</li>\n";
	}
    //************ FI 1
    
/// Print Section 0 with general activities

    $section = 0;
    $thissection = $sections[$section];

    if ($thissection->summary or $thissection->sequence or isediting($course->id)) {

        // Note, no need for a 'left side' cell or DIV.
        // Note, 'right side' is BEFORE content.
        echo '<li id="section-0" class="section main" >';
        //XTEC ************ MODIFICAT - To show only current topic to show
		//2010.06.30 @pferre22
		if($course->navigationbar == 0){
			echo '<div class="right side" >';
			if($displaysection == -2)
				echo '<a href="view.php?id='.$course->id.'&amp;week=0#section-0" title="'.$strshowallweeks.'">'.
						 '<img src="'.$CFG->pixpath.'/i/all.gif" class="icon wkall" alt="'.$strshowallweeks.'" /></a><br />';
			echo '</div>';
		}
		else
			echo '<div class="right side" >&nbsp;</div>'; 
	    //************ ORIGINAL
	    //echo '<div class="right side" >&nbsp;</div>'; 
    	//************ FI    
        echo '<div class="content">';
        
        echo '<div class="summary">';
        $summaryformatoptions->noclean = true;
        echo format_text($thissection->summary, FORMAT_HTML, $summaryformatoptions);

        if (isediting($course->id) && has_capability('moodle/course:update', get_context_instance(CONTEXT_COURSE, $course->id))) {
            echo '<p><a title="'.$streditsummary.'" '.
                 ' href="editsection.php?id='.$thissection->id.'"><img src="'.$CFG->pixpath.'/t/edit.gif" '.
                 ' class="icon edit" alt="'.$streditsummary.'" /></a></p>';
        }
        echo '</div>';
        
        print_section($course, $thissection, $mods, $modnamesused);

        if (isediting($course->id)) {
            print_section_add_menus($course, $section, $modnames);
        }

        echo '</div>';
        echo "</li>\n";
    }


/// Now all the normal modules by week
/// Everything below uses "section" terminology - each "section" is a week.

    $timenow = time();
    $weekdate = $course->startdate;    // this should be 0:00 Monday of that week
    $weekdate += 7200;                 // Add two hours to avoid possible DST problems
    $section = 1;
    $sectionmenu = array();
    $weekofseconds = 604800;
    $course->enddate = $course->startdate + ($weekofseconds * $course->numsections);

    $strftimedateshort = ' '.get_string('strftimedateshort');

    while ($weekdate < $course->enddate) {

        $nextweekdate = $weekdate + ($weekofseconds);
        $weekday = userdate($weekdate, $strftimedateshort);
        $endweekday = userdate($weekdate+518400, $strftimedateshort);

        if (!empty($sections[$section])) {
            $thissection = $sections[$section];

        } else {
            unset($thissection);
            $thissection->course = $course->id;   // Create a new week structure
            $thissection->section = $section;
            $thissection->summary = '';
            $thissection->visible = 1;
            if (!$thissection->id = insert_record('course_sections', $thissection)) {
                notify('Error inserting new week!');
            }
        }

        $showsection = (has_capability('moodle/course:viewhiddensections', $context) or $thissection->visible or !$course->hiddensections);

        if (!empty($displaysection) and $displaysection != $section) {  // Check this week is visible
            if ($showsection) {
                $sectionmenu['week='.$section] = s("$strweek $section |     $weekday - $endweekday");
            }
            $section++;
            $weekdate = $nextweekdate;
            continue;
        }

        if ($showsection) {

            $currentweek = (($weekdate <= $timenow) && ($timenow < $nextweekdate));

            $currenttext = '';
            if (!$thissection->visible) {
                $sectionstyle = ' hidden';
            } else if ($currentweek) {
                $sectionstyle = ' current';
                $currenttext = get_accesshide(get_string('currentweek','access'));
            } else {
                $sectionstyle = '';
            }

            echo '<li id="section-'.$section.'" class="section main'.$sectionstyle.'" >'; //'<div class="left side">&nbsp;</div>';

            // Note, 'right side' is BEFORE content.
            echo '<div class="right side">';
            
            if ($displaysection == $section) {
                echo '<a href="view.php?id='.$course->id.'&amp;week=0#section-'.$section.'" title="'.$strshowallweeks.'">'.
                     '<img src="'.$CFG->pixpath.'/i/all.gif" class="icon wkall" alt="'.$strshowallweeks.'" /></a><br />';
            } else {
                $strshowonlyweek = get_string("showonlyweek", "", $section);
                echo '<a href="view.php?id='.$course->id.'&amp;week='.$section.'" title="'.$strshowonlyweek.'">'.
                     '<img src="'.$CFG->pixpath.'/i/one.gif" class="icon wkone" alt="'.$strshowonlyweek.'" /></a><br />';
            }

            if (isediting($course->id) && has_capability('moodle/course:update', get_context_instance(CONTEXT_COURSE, $course->id))) {
                if ($thissection->visible) {        // Show the hide/show eye
                    echo '<a href="view.php?id='.$course->id.'&amp;hide='.$section.'&amp;sesskey='.$USER->sesskey.'#section-'.$section.'" title="'.$strweekhide.'">'.
                         '<img src="'.$CFG->pixpath.'/i/hide.gif" class="icon hide" alt="'.$strweekhide.'" /></a><br />';
                } else {
                    echo '<a href="view.php?id='.$course->id.'&amp;show='.$section.'&amp;sesskey='.$USER->sesskey.'#section-'.$section.'" title="'.$strweekshow.'">'.
                         '<img src="'.$CFG->pixpath.'/i/show.gif" class="icon hide" alt="'.$strweekshow.'" /></a><br />';
                }
                if ($section > 1) {                       // Add a arrow to move section up
                    echo '<a href="view.php?id='.$course->id.'&amp;random='.rand(1,10000).'&amp;section='.$section.'&amp;move=-1&amp;sesskey='.$USER->sesskey.'#section-'.($section-1).'" title="'.$strmoveup.'">'.
                         '<img src="'.$CFG->pixpath.'/t/up.gif" class="icon up" alt="'.$strmoveup.'" /></a><br />';
                }

                if ($section < $course->numsections) {    // Add a arrow to move section down
                    echo '<a href="view.php?id='.$course->id.'&amp;random='.rand(1,10000).'&amp;section='.$section.'&amp;move=1&amp;sesskey='.$USER->sesskey.'#section-'.($section+1).'" title="'.$strmovedown.'">'.
                         '<img src="'.$CFG->pixpath.'/t/down.gif" class="icon down" alt="'.$strmovedown.'" /></a><br />';
                }
            }
            echo '</div>';

            $weekperiod = $weekday.' - '.$endweekday;

            echo '<div class="content">';
            if (!has_capability('moodle/course:viewhiddensections', $context) and !$thissection->visible) {   // Hidden for students
                print_heading($currenttext.$weekperiod.' ('.get_string('notavailable').')', null, 3, 'weekdates');

            } else {
                print_heading($currenttext.$weekperiod, null, 3, 'weekdates');

                echo '<div class="summary">';
                $summaryformatoptions->noclean = true;
                echo format_text($thissection->summary, FORMAT_HTML, $summaryformatoptions);

                if (isediting($course->id) && has_capability('moodle/course:update', get_context_instance(CONTEXT_COURSE, $course->id))) {
                    echo ' <a title="'.$streditsummary.'" href="editsection.php?id='.$thissection->id.'">'.
                         '<img src="'.$CFG->pixpath.'/t/edit.gif" class="icon edit" alt="'.$streditsummary.'" /></a><br /><br />';
                }
                echo '</div>';

                print_section($course, $thissection, $mods, $modnamesused);

                if (isediting($course->id)) {
                    print_section_add_menus($course, $section, $modnames);
                }
            }

            echo '</div>';
            echo "</li>\n";
        }

        $section++;
        $weekdate = $nextweekdate;
    }
    echo "</ul>\n";

    if (!empty($sectionmenu)) {
        echo '<div class="jumpmenu">';
        echo popup_form($CFG->wwwroot.'/course/view.php?id='.$course->id.'&amp;', $sectionmenu,
                   'sectionmenu', '', get_string('jumpto'), '', '', true);
        echo '</div>';
    }

    echo '</div>';

    echo '</div>';
    echo '<div class="clearer"></div>';

?>
