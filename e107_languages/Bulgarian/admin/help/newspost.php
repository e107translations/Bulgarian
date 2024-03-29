<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2022 e107 Bulgaria github.com/e107translations/Bulgarian
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Language File
 *
*/
//TODO translate

if (!defined('e107_INIT')) { exit; }

$caption = "Newspost Help";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';
switch ($action)
{
  case 'create' :
	$text = "<b>General</b><br />
Body will be displayed on the main page; extended will be readable by clicking a 'Read More' link.
<br />
<br />
<b>Show title only</b>
<br />
Enable this to show the news title only on front page, with clickable link to full story.
<br /><br />
<b>Activation</b>
<br />
If you set a start and/or end date your news item will only be displayed between these dates.
";
	break;
  case 'cat' :
	$text = "You can separate your news items into different categories, and allow visitors to display only the news items in those categories. <br /><br />Upload your news icon images into either ".e_THEME."-yourtheme-/images/ or themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Set various news-related options<br /><br />
	<b>News Category Columns</b><br />
	Requires theme support to be selectable<br /><br />
	<b>News posts to display per page</b><br />
	For the main news page; displays items in unextended format.<br /><br />
	<b>News posts to display in archive</b><br />
	Sets the number of news posts which are displayed as title only on each news page (included in the previous total).<br /><br />
	<b>Enable WYSIWYG editor</b><br />
	Requires that users who can submit news can also post HTML.
	';
	break;
  case 'list' :
  default :
	$text = 'List of all news items. To edit or delete, click on one of the icons in the \'options\' column. To view the item, click
		on the title.';
}
$ns -> tablerender($caption, $text);
