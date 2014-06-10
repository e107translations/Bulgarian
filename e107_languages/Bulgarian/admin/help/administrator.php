<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2012 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: administrator.php 916 2012-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/administrator.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
if (!defined('e107_INIT')) { exit; }
$caption = "Site Admin Help";
$text = "Use this page to edit the preferences for, or delete site administrators. The administrator will only have permission to access the features that are ticked.<br /><br />
To create a new admin go to the user config page and update an existing user to admin status.";
$ns -> tablerender($caption, $text);