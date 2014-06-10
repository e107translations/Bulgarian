<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2012 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: download.php 916 2012-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/download.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
if (!defined('e107_INIT')) { exit; }
$text = "Please upload your files into the ".e_FILE."downloads folder, your images into the ".e_FILE."downloadimages folder and thumbnail images into the ".e_FILE."downloadthumbs folder.<br /><br />To submit a download, first create a parent, then create a category under that parent, you will then be able to make the download available.";
$ns -> tablerender("Download Help", $text);