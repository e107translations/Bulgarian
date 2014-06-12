<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2014 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: search.php 916 2014-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/search.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
if (!defined('e107_INIT')) { exit; }
$caption = "Search Help";
$text = "
<p>
	If your MySQL server version supports it you can switch 
	to the MySQL sort method which is faster than the PHP sort method. See preferences.
</p>
<p>
	If your site includes Ideographic languages such as Chinese and Japanese you must 
	use the PHP sort method and switch whole word matching off.
</p>
";
$ns->tablerender($caption, $text);