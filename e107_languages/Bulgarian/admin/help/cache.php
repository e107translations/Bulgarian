<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2012 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: cache.php 916 2012-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/cache.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
if (!defined('e107_INIT')) { exit; }
$caption = "Caching";
$text = "If you have caching turned on it will vastly improve speed on your site and minimise the number of calls to the sql database.<br /><br /><b>IMPORTANT! If you are making your own theme turn caching off otherwise any changes you make will not be reflected immediately.</b>";
$ns -> tablerender($caption, $text);