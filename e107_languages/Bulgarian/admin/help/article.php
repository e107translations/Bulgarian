<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2014 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: article.php 916 2014-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/article.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
$text = "От тук можете да добавяте статии или статии от няколко страници.<br />
 За статии от няколко страници отделете всяка страница с текста [newpage], например <br /><code>Тест1 [newpage] Тест2</code><br /> ще създаде статия от две страници със 'Тест1' на страница 1 и 'Тест2' на втора страница.
<br /><br />
Ако статията ви съдържа HTML тагове които искате да запазите, поставете кода между [html] [/html]. Например, ако въведете текст '&lt;table>&lt;tr>&lt;td>Здравейте &lt;/td>&lt;/tr>&lt;/table>' във статията ви, ще се покаже таблицата с надписа Здравейте. Ако въведете '[html]&lt;table>&lt;tr>&lt;td>Здравейте &lt;/td>&lt;/tr>&lt;/table>[/html]' кода който сте въвели ще се покаже и няма да се изпълни.";
$ns -> tablerender("Статии - Помощ", $text);