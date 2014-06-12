<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2014 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: userclass2.php 916 2014-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/userclass2.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
if (!defined('e107_INIT')) { exit; }
$caption = "User Class Help";
if (e_QUERY)
{
  $qs = explode(".", e_QUERY);
}
switch (varsettrue($qs[0],'config'))
{
  case 'initial' :
	$text = "Set the classes to which a new member of the site is assigned initially. 
	If you have verification enabled, this assignment may take place either when the user signs up, or when the user is verified.<br /><br />
	  And remember that if you are using hierarchical user classes, a user is automatically a member of all classes 'above' each selected class in the tree";
	break;
  case 'options' :
	$text = "You can choose to make an entry in the admin log whenever an admin modifies the userclass information.<br /><br />
	The Setup options allow you to create and remove the default class hierarchy. You can see the effect by looking at the user tree.<br />
	This won't destroy your other class information, and you can modify or remove the hierarchy later.";
	break;
  case 'membs' :
    $text = "You can carry out bulk modification of class membership here. (The class membership of individual members is best carries out from the 'Users' page).<br /><br />
	  And remember that if you are using hierarchical user classes, a user is automatically a member of all classes 'above' each selected class in the tree";
	break;
  case 'debug' :
	$text = "For advanced users only - shows the hierarchy of the classes, plus the assigned classes and the classes to which the first 20 site members have access.<br />
	The number in front of the class name is its unique ID (reference number). The 'Everyone' class has an ID of 0 (zero). E107 uses these IDs throughout to refer to classes.<br />
	After the class name is the class visibility and editability - [vis:253, edit: 27] for example. This means that the class will be visible in most selectors only if the current user is a member of class 253, 
	and the user may edit their class membership only if they are a member of class 27.<br />
	Finally, after the '=', is a list of all classes either above or below each class in the tree, plus the ID of that class. Thus a user who is a member of a particular class will
	 be a member of all the classes in this list.<br /><br />
	To help with understanding, the class membership of the first 20 members is shown. The first entry on each line shows the classes of which the user is a member. The 
	 second entry lists all the classes where the user is a member once inheritance takes effect. The third entry shows which class memberships they can edit";
	break;
  case 'test' :
  case 'special' :
    $text = "Don't use this!!! For the devs only!!!";
	break;
  case 'config' :
  default :
	$text = "You can create or edit/delete existing classes from this page.<br />
         This is useful for restricting users to certain parts of your site. For example, you could create a class called TEST, 
		 then create a forum which only allowed users in the TEST class to access it.<br /><br />
		 The class name is displayed in drop-down lists and the like; in some places the more detailed description is also displayed.<br /><br />
		 The class icon may be displayed in various places on the site, if one is set.<br /><br />
		 To allow users to determine whether they can be a member of a class, allow them to manage it. If you set 'no-one' here, only the admins
		 can manage membership of the class<br /><br />
		 The 'visibility' field allows you to hide the class from most members - applies in some of the drop-down lists and checkboxes.<br /><br />
		 The 'class parent' allows you to set a hierarchy of classes. If the 'top' of the hierarchy is the 'Everybody/Public' or 'Member' classes, the 
		 classes lower down the hierarchy also have the rights of their parent class, and that classes' parent, and so on. If the 'top' of the hierarchy is
		 the 'No One/Nobody' class, then rights are accumulated in the opposite direction - a class accumlates all the rights of a class <b>below</b> them in the 
		 tree. The resulting tree is shown in the lower part of the page; you can expand and contract branches by clicking on the '+' and '-' boxes.";
}
$ns -> tablerender($caption, $text);