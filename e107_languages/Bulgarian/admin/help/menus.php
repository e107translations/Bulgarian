<?php
if(!defined('e107_INIT')){ exit; }

if (!getperms("2") && !e107::isCli())
{
	e107::redirect();
	exit;
}

$sql = e107::getDb();
$tp = e107::getParser();
$frm = e107::getForm();

if(isset($_POST['reset']))
{
	for($mc=1;$mc<=5;$mc++)
	{
		$sql->select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
		$count = 1;
		$sql2 = e107::getDb('sql2');
		while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql->fetch())
		{
			$sql2 ->update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
			$count++;
		}
		$text = "<b>Менютата са нулирани в базата данни</b><br /><br />";
	}
}
else
{
	unset($text);
}

$text = "Мениджърът на менюта ви позволява да поставяте и подреждате менюта в шаблона на темата.

[u]Посочете с мишката[/u] подзоните, за да редактирате съществуващите менюта.

Ако менютата не се обновяват правилно, бутонът за опресняване по-долу може да помогне.

[html]
<form method='post' id='menurefresh' action='".e_SELF."'>
<div>
".$frm->admin_button('reset','Опресняване','cancel')."</div>
</form>
[br]
".e107::getParser()->toGlyph('fa-search')." показва, че видимостта на менюто е променена.
[/html]
";

$text = $tp->toHTML($text, true);
e107::getRender()->tablerender("Помощ за Мениджъра на менюта", $text);
