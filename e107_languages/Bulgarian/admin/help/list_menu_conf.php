﻿<?php
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
$text = "В тази секция можете да настроите 3 менюта<br>
<b> Нови Статии Меню</b> <br>
Въведете брой статии например '5' в първото поле за да се показват първите 5 статии, оставете празно да се показват всичките, Можете да настроите кое заглавие от статиите да бъде първо , ако не използвате тази опция няма да създадете линк, например : 'Всички статии'<br>
<b> Коментари/Форум Меню</b> <br>
Броя коментари по подразбиране е 5, броя на символи по подразбиране е 10000. Ако текста на един ред е много дълъг ще бъде изрязан, добър избор за това е  '...', проверете оригиналната статия ако желаете да видите тази опция.<br>";
$ns -> tablerender("Настройка на менюто - Помощ", $text);