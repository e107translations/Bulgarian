<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2012 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: wmessage.php 916 2012-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/wmessage.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
if (!defined('e107_INIT')) { exit; }
$text = "This page allows you to set a message that will appear at the top of your front page all the time it's activated. You can set a different message for guests, registered/logged-in members and administrators.";
$ns -> tablerender("WMessage Help", $text);