<?php
/*
 * e107 website system - Bulgarian administrative language file
 */
if (!defined("PAGE_NAME")) { define("PAGE_NAME", "Задачи по график"); }

// Меню
define("LAN_CRON_M_02", "Обновяване");
define("LAN_CRON_M_SETUP", "Настройка");

// Заглавия на таблицата
define("LAN_CRON_2", "Функция");
define("LAN_CRON_3", "Раздел");
define("LAN_CRON_4", "Последно изпълнение");

// Стандартни задачи
define("LAN_CRON_01_1", "Тестов имейл");
define("LAN_CRON_01_2", "Изпращане на тестов имейл до [eml].");
define("LAN_CRON_01_3", "Препоръчва се за проверка на системата за задачи по график.");

define("LAN_CRON_02_1", "Опашка за имейли");
define("LAN_CRON_02_2", "Обработване на опашката за имейли.");

define("LAN_CRON_03_1", "Проверка за върнати имейли");
define("LAN_CRON_03_2", "Проверка за недоставени и върнати имейли.");

define("LAN_CRON_04_1", "Повторна проверка на блокиранията");
define("LAN_CRON_04_2", "Обработване на повторно задействани блокирания.");
define("LAN_CRON_04_3", "Необходимо е само ако е активирано повторното задействане на блокирания.");

define("LAN_CRON_05_1", "Резервно копие на базата данни");
define("LAN_CRON_05_2", "Създаване на резервно копие на системната база данни в");

define('LAN_CRON_06_1', "Обработване на условие за блокиране");

// Грешки и информационни съобщения
define("LAN_CRON_6", "Настройките не можаха да бъдат импортирани");
define("LAN_CRON_7", "Настройките за изпълнение не можаха да бъдат импортирани");
define("LAN_CRON_8", "Импортирани настройки за изпълнение за");

define("LAN_CRON_9", "преди [x] минути и [y] секунди.");
define("LAN_CRON_10", "преди [y] секунди.");

define("LAN_CRON_11", "Активни задачи");
define("LAN_CRON_12", "Последно обновяване на cron");

// Информация за checkCoreUpdate
define("LAN_CRON_20_1", "Проверка за обновяване на e107");
define("LAN_CRON_20_2", "Проверка в e107.org за обновявания на ядрото");
define("LAN_CRON_20_3", "Препоръчва се, за да поддържате системата актуална.");
define("LAN_CRON_20_4", "Обновяване на това Git хранилище");
define("LAN_CRON_20_5", "Обновяване на тази e107 инсталация с най-новите файлове от GitHub.");
define("LAN_CRON_20_6", "Препоръчва се само за разработчици.");
define("LAN_CRON_20_8", "Може да причини нестабилност на сайта.");

define("LAN_CRON_30", "Всяка минута");
define("LAN_CRON_31", "През минута");
define("LAN_CRON_32", "На всеки 5 минути");
define("LAN_CRON_33", "На всеки 10 минути");
define("LAN_CRON_34", "На всеки 15 минути");
define("LAN_CRON_35", "На всеки 30 минути");

define("LAN_CRON_36", "Всеки час");
define("LAN_CRON_37", "През час");
define("LAN_CRON_38", "На всеки 3 часа");
define("LAN_CRON_39", "На всеки 6 часа");

define("LAN_CRON_40", "Всеки ден");
define("LAN_CRON_41", "Всеки месец");
define("LAN_CRON_42", "Всеки делничен ден");

define("LAN_CRON_50", "Минути:");
define("LAN_CRON_51", "Часове:");
define("LAN_CRON_52", "Дни:");
define("LAN_CRON_53", "Месеци:");
define("LAN_CRON_54", "Дни от седмицата:");
define("LAN_CRON_55", "Резервното копие на базата данни е неуспешно");
define("LAN_CRON_56", "Резервното копие на базата данни е завършено");

define("LAN_CRON_61", "Генериране на нов cron токен");
define("LAN_CRON_62", "Изпълнява се конфигурационна функция [b][x][/b]");
define("LAN_CRON_63", "Конфигурационната функция [b][x][/b] не е намерена.");
define("LAN_CRON_64", "Администраторът може да автоматизира задачи чрез системата „Задачи по график“ на e107.[br]\nНищо тук няма да се изпълнява, докато сървърът не извиква [b]cron.php[/b] веднъж в минута. Разделът „Настройка“ показва как да го конфигурирате и предоставя команда за копиране.[br]\nВ раздела „Управление“ можете да редактирате, изтривате и стартирате задачи.[br]\nПри редактиране на задача можете да зададете минутите, часовете, дните, месеца или деня от седмицата, в които да се изпълнява. Използвайте * за всеки период и свойството „Активно“, за да включите задачата.[br]\n\nЗабележка: не се препоръчва да изтривате стандартните задачи.[br]");

define("LAN_CRON_BACKUP", "Резервно копие");
define("LAN_CRON_LOGGING", "Запис в журнал");
define("LAN_CRON_RUNNING", "Изпълнява се");

define("LAN_CRON_65", "Обновяване на Git хранилището на темата");
define("LAN_CRON_66", "Не е намерено Git хранилище");
define("LAN_CRON_67", "В директорията на темата не е намерено Git хранилище");

define("LAN_CRON_SETUP_INTRO", "За да се изпълняват задачите по график, сървърът трябва да извиква [b]cron.php[/b] веднъж в минута. Изберете една от опциите по-долу, копирайте показаното в планировчика на сървъра и използвайте само една опция, иначе задачите, чието време е настъпило, ще се изпълняват два пъти.");
define("LAN_CRON_SETUP_HTTP_TITLE", "Уеб заявка");
define("LAN_CRON_SETUP_HTTP_WHY", "Планировчикът извлича URL адрес веднъж в минута. Заявката се изпълнява с PHP версията, избрана за този сайт, не изисква файлови права и работи както с cron задачи в контролен панел, така и с външни cron услуги.");
define("LAN_CRON_SETUP_CLI_TITLE", "PHP от команден ред");
define("LAN_CRON_SETUP_CLI_WHY", "Планировчикът стартира PHP интерпретатора за cron.php. Използва се PHP изпълнимият файл, посочен в командата, затова поддържайте командата съобразена с PHP версията на сайта.");
define("LAN_CRON_SETUP_SHEBANG_TITLE", "Shell скрипт");
define("LAN_CRON_SETUP_SHEBANG_WHY", "Планировчикът стартира cron.php директно, а първият му ред избира php от PATH. Файлът трябва да е изпълним, а PATH на cron обикновено е ограничен, затова може да не бъде намерен php или да бъде използвана грешна версия.");
define("LAN_CRON_SETUP_COMMAND_LABEL", "Команда (поставете я в cron задачата на контролния панел)");
define("LAN_CRON_SETUP_CRONTAB_LABEL", "Ред за crontab (изпълнява се всяка минута)");
define("LAN_CRON_SETUP_URL_LABEL", "URL (за външни cron услуги като cron-job.org или EasyCron)");
define("LAN_CRON_SETUP_WINDOWS_COMMAND_LABEL", "Команда (за действие в Windows Task Scheduler)");
define("LAN_CRON_SETUP_SCHTASKS_LABEL", "Създаване на задачата с една команда (Command Prompt като администратор)");
define("LAN_CRON_SETUP_RECOMMENDED", "Препоръчително");
define("LAN_CRON_SETUP_PANEL_HOWTO", "В cPanel, DirectAdmin или Plesk отворете страницата за cron задачи и добавете задача, която се изпълнява всяка минута с тази команда. Без контролен панел изпълнете [b]crontab -e[/b] и добавете реда за crontab.");
define("LAN_CRON_SETUP_WGET_LABEL", "С wget вместо curl");
define("LAN_CRON_SETUP_HTTP_FALLBACK_NOTE", "Ако сървърът не може да достъпи собствения URL адрес на сайта (някои хостинги го блокират), използвайте вместо това опцията PHP от команден ред.");
define("LAN_CRON_SETUP_PHP_FOUND", "PHP е намерен на [x].");
define("LAN_CRON_SETUP_PHP_NOT_FOUND", "Не можа да бъде потвърден PHP изпълним файл, затова командата приема, че [b]php[/b] е наличен в PATH. Ако не е, попитайте хостинг доставчика за пътя до PHP [x] изпълнимия файл за команден ред.");
define("LAN_CRON_SETUP_OPEN_BASEDIR_NOTE", "open_basedir предотврати проверката за PHP изпълними файлове.");
define("LAN_CRON_SETUP_EXECUTABLE", "cron.php е изпълним.");
define("LAN_CRON_SETUP_NOT_EXECUTABLE", "cron.php не е изпълним. Първо го направете изпълним:");
define("LAN_CRON_SETUP_REGENERATE_WARNING", "Генерирането на нов токен обезсилва вече настроената команда. След това копирайте новата команда в планировчика.");
define("LAN_CRON_REFUSED_SUMMARY", "От [y] са отказани [x] заявка/заявки към cron.php; последната е в [z].");
define("LAN_CRON_REFUSED_LAST_FROM", "Последната заявка е от [x].");
define("LAN_CRON_REFUSED_TOKEN_INCORRECT", "Заявките съдържат токен, който не съвпада.");
define("LAN_CRON_REFUSED_TOKEN_MISSING", "Заявките не съдържат токен.");
define("LAN_CRON_REFUSED_COPY_AGAIN", "Копирайте командата отново от раздела [x].");
define("LAN_CRON_NEVER_REPORTED", "Все още няма отчет от задача по график. Следвайте указанията в раздела [x], за да насрочите cron.php на сървъра.");
define("LAN_CRON_LASTRUN_HTTP", "през HTTP");
define("LAN_CRON_LASTRUN_HTTP_FROM", "през HTTP от [x]");
define("LAN_CRON_LASTRUN_CLI", "от командния ред");
define("LAN_CRON_SETUP_DETECTED_ENVIRONMENT", "Открита среда: [x]");
define("LAN_CRON_SETUP_OPEN_PANEL", "Отваряне на [x]");
define("LAN_CRON_SETUP_CONTROL_PANEL", "Контролен панел");
define("LAN_CRON_SETUP_SCHTASKS_ACCOUNT_NOTE", "Task Scheduler изпълнява командата с избрания от вас акаунт; използвайте акаунт, който има достъп за четене до файловете на сайта.");
define("LAN_CRON_SETUP_CURL_EXE_NOTE", "curl.exe е включен в Windows 10 и по-новите версии; при по-стари системи използвайте опцията PHP от команден ред.");
define("LAN_CRON_TOKEN_REGENERATED", "Генериран е нов cron токен. Обновете командата в планировчика на сървъра.");
