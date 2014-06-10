<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2012 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: lan_eurl.php 948 2014-01-20 12:14:34Z veskoto $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/lan_eurl.php $
 * $Revision: 948 $
 * $Author: veskoto $
*/
define("LAN_EURL_NAME", "Управление на URL-тата на сайта");
define("LAN_EURL_NAME_CONFIG", "Профили");
define("LAN_EURL_NAME_ALIASES", "Псевдоними");
define("LAN_EURL_NAME_SETTINGS", "Главни настройки");
define("LAN_EURL_NAME_HELP", "Помощ");
define("LAN_EURL_EMPTY", "Списъка е празен");
define("LAN_EURL_LEGEND_CONFIG", "Изберете URL профил за съответната зона на сайта");
define("LAN_EURL_LEGEND_ALIASES", "Конфигурирайте базов URL псевдоним за URL Профил");
define("LAN_EURL_DEFAULT", "Първоначални");
define("LAN_EURL_FRIENDLY",   "Приятелски");
define("LAN_EURL_LEGACY", "Legacy direct URLs.");
define("LAN_EURL_REWRITE_LABEL", "Friendly URLs");
define("LAN_EURL_REWRITE_DESCR", "Search engine and user friendly URLs.");
define("LAN_EURL_PROFILE", "Настройка на профил");
define("LAN_EURL_INFOALT", "Информация");
define("LAN_EURL_PROFILE_INFO", "Информацията за профили липсва(липсва profile.xml)");
define("LAN_EURL_LOCATION", "Местоположение на профила:");
define("LAN_EURL_LOCATION_NONE", "Не е наличен конфигурационен файл");
define("LAN_EURL_FORM_HELP_DEFAULT", "Псевдоним, когато е в език по подразбиране.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Стойност по подразбиране е ");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Псевдоним, когато е в ");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Базов URL: ");
// messages
define("LAN_EURL_ERR_ALIAS_MODULE", "Псевдоним &quot;%1\$s&quot; неможе да бъде записан - съществува системен URL профил със същото име. Моля, изберете друг псевдоним за системен URL профил &quot;%2\$s&quot;");
// settings
define("LAN_EURL_SETTINGS_PATHINFO", "Премахнете името на файла от URL-то");
define("LAN_EURL_SETTINGS_MAINMODULE", "Асоциирайте Root пространство от имена на сайта");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Изберете зоната на сайта , която ще бъде свързана с вашия базов URL на сайта. Пример: Когато Новини е вашето Root пространство от имена http://yoursite.com/News-Item-Title ще бъдат свързани с Новини (страницата изглед на новина ще да бъде разрешена)");
define("LAN_EURL_SETTINGS_REDIRECT", "Препрати към Системната страница Не е намерена");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Ако е зададено на Забранено, страницата Не е намерена ще се генерира директно ( без препращане на браузъра )");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Тип на автоматично генериране на стринг за приятелски URL");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Изберете как да бъде сглобен стринга за приятелско URL когато се генерира автоматично от заглавието (така също в новини, самостоятлни страници, и т.н.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Просто го запази");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "с-тирета-и-малки-букви");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "С-Тирета-И-Главни-Букви");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "С-тирета-без-главни-букви-СМЕНИ");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "долна_черта_и_малки_букви");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Долна_Черта_И_Главни_Букви");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Долна_черта_без_главни_букви_СМЕНИ");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "с+разделите+плюс+и+малки+букви");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "С+Разделител+Плюс+И+Главни+Букви");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "С+разделител+плюс+без+главни+букви+СМЕНИ");
define("LAN_EURL_MODREWR_DESCR", "Премахва вписването на името на файла (rewrite.php) от вашите URL-та. Трябва да имате инсталирана и стартирана функцията mod_rewrite на вашият сървър (Apache Web Server). След като активирате тази настройка, отидете в главната директория на сайта си, преименувайте файла htaccess.txt на .htaccess модифицирайте <em>&quot;RewriteBase&quot;</em> директивата, ако е необходимо.");
// navigation
define("LAN_EURL_MENU", "URL-та на сайта");
define("LAN_EURL_MENU_CONFIG", "URL Профили");
define("LAN_EURL_MENU_ALIASES", "Псевдоними");
define("LAN_EURL_MENU_SETTINGS", "Настройки");
define("LAN_EURL_MENU_HELP", "Помощ");
define("LAN_EURL_UC", "В процес на изграждане");
define("LAN_EURL_CORE_MAIN", "Root пространство от имена на сайта - псевдоними не се използват.");
// News
define("LAN_EURL_CORE_NEWS", "Новини");
define("LAN_EURL_NEWS_DEFAULT_LABEL", "По подразбиране");
define("LAN_EURL_NEWS_DEFAULT_DESCR", "Завещано директно URL. Пример: <br />http://yoursite.com/news.php<br />http://yoursite.com/news.php?extend.1 <em>(преглеждане на новина)</em>");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Приятелско URL без ID (ниска производителност, по-приятелско)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Демонстрира ръчно линк парсване и сглобяване.<br />Примери: <br />http://yoursite.com/новини<br />http://yoursite.com/новини/Новина Име <em>(преглеждане на новина)</em>");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Приятелско URL с ID (за производителност)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Демонстрира автоматизирано линк парсване и сглобяване на базата на предварително определени маршрутни правила.<br />Примери: <br />http://yoursite.com/новини<br />http://yoursite.com/новини/1/Новина Име <em>(преглеждане на новина)</em>");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Напълно Приятелско URL без ID (ниска производителност, още по-приятелско)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "Примери: <br />http://yoursite.com/новини/Новина Категория/Новина Заглавие<em>(преглеждане на новина)</em><br />http://yoursite.com/новини/Категория/Категория Новини<em>(списък с новини)</em>");
// Downloads 
//define("LAN_EURL_CORE_DOWNLOADS", "Downloads");
// Users
define("LAN_EURL_CORE_USER", "Потребители");
define("LAN_EURL_USER_DEFAULT_LABEL", "По подразбиране");
define("LAN_EURL_USER_DEFAULT_DESCR", "Завещано директно URL. Пример: http://yoursite.com/user.php?id.1");
define("LAN_EURL_USER_REWRITE_LABEL", "Приятелско URL");
define("LAN_EURL_USER_REWRITE_DESCR", "Приятелско URL за търсачки и потребители. <br />Пример: http://yoursite.com/потребител/ПотребителскоИмеЗаПоказване");
// Users
define("LAN_EURL_CORE_PAGE", "Страници");
define("LAN_EURL_PAGE_DEFAULT_LABEL", "По подразбиране");
define("LAN_EURL_PAGE_DEFAULT_DESCR", "Завещано директно URL. Пример: http://yoursite.com/page.php?1");
define("LAN_EURL_PAGE_SEF_LABEL", "Приятелско URL с ID (производителност)");
define("LAN_EURL_PAGE_SEF_DESCR", "Приятелско URL за търсачки и потребители. <br />Пример: http://yoursite.com/page/1/Страница-Име");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Приятелско URL без ID (ниска производителност, по-приятелско)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Приятелско URL за търсачки и потребители. <br />Пример: http://yoursite.com/page/Page-Name");
// Search
define("LAN_EURL_CORE_SEARCH", "Търсене");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "URL По подразбиране за търсачката");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Завещано директно URL. Пример: http://yoursite.com/search.php");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Приятелско URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "Пример: http://yoursite.com/search/");
// System
define("LAN_EURL_CORE_SYSTEM", "Системни");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Системни URL-та по подразбиране");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URL-та за страници като Не е намерено, Достъпът е забранен, и др. Пример: http://yoursite.com/?route=system/error/notfound");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Приятелски Системни URL-та");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URL-та за страници като Не е намерено, Достъпът е забранен, и др.<br />Пример: http://yoursite.com/system/error404");
// System
define("LAN_EURL_CORE_INDEX", "Начална страница");
define("LAN_EURL_CORE_INDEX_INFO", "Началната страница не може да има псевдоним.");
//define("LAN_EURL_", "");