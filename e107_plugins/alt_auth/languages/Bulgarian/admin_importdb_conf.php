<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2012 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: admin_importdb_conf.php 917 2012-04-13 18:07:02Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_plugins/alt_auth/languages/Bulgarian/admin_importdb_conf.php $
 * $Revision: 917 $
 * $Author: nickypn $
*/
define("IMPORTDB_LAN_1", "Тип база данни");
define("IMPORTDB_LAN_2", "Plain Text");
define("IMPORTDB_LAN_3", "Joomla salted");
define("IMPORTDB_LAN_4", "Mambo salted");
define("IMPORTDB_LAN_5", "SMF (SHA1)");
define("IMPORTDB_LAN_6", "Generic SHA1");
define("IMPORTDB_LAN_7", "MD5 (E107 оригинал)");
define("IMPORTDB_LAN_8", "E107 salted (опция в 0.8)");
define("IMPORTDB_LAN_9", "Метод на Паролата:");
define("IMPORTDB_LAN_10", "Конфигурирай импортираният тип база данни");
define("IMPORTDB_LAN_11", "Тази опция се използва, когато трябва импортирате информация от някои други потребителски ориентирани системи в e107. С нея можете да приемете пароли, кодирани в избрания нестандартен формат. Всяка потребителска парола се конвертира в e107 формат когато потребителя се идентифицира");
define("IMPORTDB_LAN_12", "PHPBB2/PHPBB3 salted");
define("IMPORTDB_LAN_13", "WordPress salted");
define("IMPORTDB_LAN_14", "Magento salted");
define("LAN_AUTHENTICATE_HELP", "Този метод за ауторизация трябва да се използва <i>само</i>, когато трябва да се импортира потребителска база данни в e107 и паролата е в несъвместим формат. Оригиналната парола се чете от локалната база данни и се валидира по отношение на формата за съхраняване на оригиналната система. Ако е потвърдена се конвертира в настоящият e107-съвместим формат и се съхранява в базата данни. След известно време Вие можете да изключите модула Алтернативна ауторизация, тъй като активните потребители ще имат техните пароли, съхранени в съвместим формат.");