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
$text = "От тук можете да добавяте статии или статии от няколко страници.<br />
 За статии от няколко страници отделете всяка страница с текста [newpage], например <br /><code>Тест1 [newpage] Тест2</code><br /> ще създаде статия от две страници със 'Тест1' на страница 1 и 'Тест2' на втора страница.
<br /><br />
Ако статията ви съдържа HTML тагове които искате да запазите, поставете кода между [html] [/html]. Например, ако въведете текст '&lt;table>&lt;tr>&lt;td>Здравейте &lt;/td>&lt;/tr>&lt;/table>' във статията ви, ще се покаже таблицата с надписа Здравейте. Ако въведете '[html]&lt;table>&lt;tr>&lt;td>Здравейте &lt;/td>&lt;/tr>&lt;/table>[/html]' кода който сте въвели ще се покаже и няма да се изпълни.";
$ns -> tablerender("Статии - Помощ", $text);