<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2014 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: filemanager.php 916 2014-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/filemanager.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
if (!defined('e107_INIT')) { exit; }
$text = "You are able to manage the files in your /files directory from this page. If you are getting an error message about permissions when uploading please CHMOD the directory you are attempting to upload into to 777.";
$ns -> tablerender("File Manager Help", $text);