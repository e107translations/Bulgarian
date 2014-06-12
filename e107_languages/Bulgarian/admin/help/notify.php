<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2014 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: notify.php 916 2014-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/notify.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
if (!defined('e107_INIT')) { exit; }
$text = "Notify sends email notifications when e107 events occur.<br /><br />
For example, set 'IP banned for flooding site' to user class 'Admin' and all admins will be sent an email when your 
site is being flooded.<br /><br />
You can also, as another example, set 'News item posted by admin' to user class 'Members' and all your users will be 
sent news items you post to the site in an email.<br /><br />
If you would like the email notifications to be sent to an alternative email address - select the 'Email' option and 
enter in the email address in the field provided.";
$ns -> tablerender("Notify Help", $text);