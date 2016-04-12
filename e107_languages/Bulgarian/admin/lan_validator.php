<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2016 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Language File
 *
*/

define('LAN_VALIDATE_0', 'Непозната грешка');
define('LAN_VALIDATE_101', 'Липсваща стойност');
define('LAN_VALIDATE_102', 'Неочакван вид стойност');
define('LAN_VALIDATE_103', 'Намерени невалидни знаци');
define('LAN_VALIDATE_104', 'Не е валиден имейл адрес');
define('LAN_VALIDATE_105', 'Полетата не съвпадат');
define('LAN_VALIDATE_131', 'Низът е прекалено кратък');
define('LAN_VALIDATE_132', 'Низът е прекалено дълъг');
define('LAN_VALIDATE_133', 'Стойността е прекалено малка');
define('LAN_VALIDATE_134', 'Стойността е прекалено голяма');
define('LAN_VALIDATE_135', 'Областта на брояча е прекалено малка');
define('LAN_VALIDATE_136', 'Областта на брояча е прекалено голяма');
define('LAN_VALIDATE_151', 'Стойността трябва да бъде цяло число');
define('LAN_VALIDATE_152', 'Стойността трябва да бъде дробно число');
define('LAN_VALIDATE_153', 'Трябва да бъде инстанция');
define('LAN_VALIDATE_154', 'Стойността трябва да бъде масив');
define('LAN_VALIDATE_191', 'Празна стойност');
define('LAN_VALIDATE_201', 'Файлът не съществува');
define('LAN_VALIDATE_202', 'Файлът няма права за писане');
define('LAN_VALIDATE_203', 'Файлът надхвърля разрешената максимална големина');
define('LAN_VALIDATE_204', 'Файлът е по-малък от разрешената минимална големина');
//define("LAN_VALIDATE_", "");

/*
 * TRANSLATION INSTRUCTIONS:
 * Don"t translate %1$s, %2$s, %3$s, etc.
 *
 * These are substituted by validator handler:
 * %1$s - field name
 * %2$d - validation error code (number)
 * %3$s - validation error message (string)
 */

// define("LAN_VALIDATE_FAILMSG", "<strong>&quot;%1$s&quot;</strong> validation error: [#%2$d] %3$s.");

//FIXME - use this instead:
define('LAN_VALIDATE_FAILMSG', '[x] грешка при валидиране: [y] [z].');