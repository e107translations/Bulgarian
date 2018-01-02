<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2016 e107 Bulgaria github.com/e107translations/Bulgarian
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Language File
 *
*/
if (!defined('e107_INIT')) { exit; }

$caption = "Табло";
$text = "Тази страница ви предоставя преглед на дейността на сайта.<br /><br />";

if(e107::getPref('admincss')=='admin_dark.css' && deftrue('BOOTSTRAP') !== 3)
{
	$text .= "<small>Темата е прекалено тъмна? <a class='btn btn-default btn-xs btn-mini btn-inverse' href='".e_ADMIN."theme.php?mode=admin'>Сменете от тук</a></small>";
	
}

e107::getRender()->tablerender($caption, $text);
