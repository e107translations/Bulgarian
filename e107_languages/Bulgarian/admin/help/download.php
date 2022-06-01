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

$text = "Please upload your files into the ".e_FILE."downloads folder, your images into the ".e_FILE."downloadimages folder and thumbnail images into the ".e_FILE."downloadthumbs folder.
<br /><br />
To submit a download, first create a parent, then create a category under that parent, you will then be able to make the download available.";
$ns -> tablerender("Download Help", $text);
