<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2016 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Language File
 *
*/
//TODO translate

if (!defined('e107_INIT')) { exit; }

$caption = "Search Help";
$text = "
	If your MySQL server version supports it you can switch 
	to the MySQL sort method which is faster than the PHP sort method. See preferences.
<br /><br />
	If your site includes Ideographic languages such as Chinese and Japanese you must 
	use the PHP sort method and switch whole word matching off.

";
$ns->tablerender($caption, $text);
?>