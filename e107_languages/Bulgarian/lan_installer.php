<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2016 e107 Bulgaria github.com/e107translations/Bulgarian
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Language File
 *
*/
define("LANINS_001", "Инсталиране на е107");
define("LANINS_002", "Етап");
define("LANINS_003", "1");
define("LANINS_004", "Избор на език");
define("LANINS_005", "Моля изберете език за инсталацията");
define("LANINS_007", "4");
define("LANINS_008", "Проверка версия на PHP & MySQL  / Проверка правата на файловете");
define("LANINS_009", "Провери отново правата");
define("LANINS_010", "Файлове, които нямат права за писане:");
define("LANINS_010a", "Папки, които нямат права за писане:");
define("LANINS_012", "Не могат да бъдат намерени MySQL Функции. Това вероятно означава, че или не е инсталиран MySQL PHP модулът, или не е конфигуриран правилно.");
define("LANINS_013", "Невъзможно е определянето на номера на версията на вашия MySQL сървър. Това може да означава, че вашия MySQL сървър не функционира или отказва създаването на връзка с него.");
define("LANINS_014", "Права на файлове");
define("LANINS_015", "PHP версия");
define("LANINS_017", "ОК");
define("LANINS_018", "Убедете се, че всички изброени файлове съществуват и са с права за писане от сървъра. Това обикновено изисква промяна на правата им с CHMOD 777, но сървър обкръжението варира - свържете се с вашия хост администратор ако срещнете проблеми.");
define("LANINS_019", "Версията на PHP инсталирана на вашия сървър не е подходяща за работа с e107. e107 изисква PHP минимум версия 4.3.0 за да работи коректно. Актуализирайте версията на PHP или се свържете с вашата хостинг компания за актуализация.");
define("LANINS_021", "2");
define("LANINS_022", "MySQL Сървър Информация");
define("LANINS_023", "Моля въведете настройките за вашия MySQL сървър. 

Ако имате root права, можете да създадете нова база с избирането на отметката, в противен случай трябва предварително да създадете база или да използвате вече съществуваща. 

Ако притежавате само една база, използвайте префикс, така че други скриптове да могат да използват същата база без това да доведе до проблеми. 
Ако нямате информация за вашия MySQL сървър, свържете се с вашата хостинг компания.");
define("LANINS_024", "MySQL Сървър:");
define("LANINS_025", "MySQL Потребителско име:");
define("LANINS_026", "MySQL Парола:");
define("LANINS_027", "MySQL База:");
define("LANINS_028", "Създаване на база?");
define("LANINS_029", "Префикс за таблиците:");
define("LANINS_030", "MySQL сървърът, който искате е107 да ползва. Това може да включва също така и номер на порт. Напр. \"хостиме:порт\" или път до локален socket напр. \":/път/до/socket\" за localhost.");
define("LANINS_031", "Потребителското име, което искате да използва e107 за връзка с вашия MySQL сървър");
define("LANINS_032", "Паролата за потребителя, който сте въвели");
define("LANINS_033", "MySQL базата, в която искате да бъде записан e107. Ако потребителят има права за създаване на база, можете да ползвате опцията за автоматично създаване на базата, ако тя не съществува.");
define("LANINS_034", "Префиксът, който искате да ползва e107 при създаването на своите таблици. Удобно е за многократно инсталиране на е107 в една и съща база данни.");
define("LANINS_036", "3");
define("LANINS_037", "Проверка на връзката с MySQL");
define("LANINS_038", " и създаване на информационната база");
define("LANINS_039", "Моля уверете се, че сте попълнили всички полета и най-вече - MySQL Сървър, MySQL Потребителско име и MySQL База (Задължително искани от MySQL Сървъра)");
define("LANINS_040", "Грешки");
define("LANINS_041", "e107 не можа да установи връзка с MySQL сървъра, използвайки информацията, която въведохте. Моля върнете се обратно и се уверете, че информацията е коректна.");
define("LANINS_042", "Връзката с MySQL сървъра е установена и проверена.");
define("LANINS_043", "Невъзможно е създаването на база, моля убедете се, че имате права за създаване на база данни на вашия сървър.");
define("LANINS_044", "Базата е създадена успешно.");
define("LANINS_045", "Моля използвайте бутона за да продължите към следващия етап.");
define("LANINS_046", "5");
define("LANINS_047", "Административна Информация");
define("LANINS_048", "EXIF Модул");
define("LANINS_049", "Двете пароли, които въведохте не съвпадат. Моля върнете се обратно и опитайте отново.");
define("LANINS_050", "XML Модул");
define("LANINS_051", "Инсталирано");
define("LANINS_052", "Не е инсталирано");
define("LANINS_055", "Потвърждение за инсталиране");
define("LANINS_056", "6");
define("LANINS_057", " e107 вече има цялата необходима информация за завършване на инсталацията. 

Моля използвайте бутона за създаване на таблиците и за запазване на всички ваши настройки.");
define("LANINS_058", "7");
define("LANINS_060", "Невъзможно е прочитането на sql файлът. 

Моля убедете се, че файлът [b]core_sql.php[/b] съществува в директорията [b]/e107_admin/sql[/b].");
define("LANINS_061", "e107 не успя да създаде всички необходими таблици. 
Моля изчистете базата и коригирайте всички проблеми преди да опитате отново.");
define("LANINS_069", "e107 беше успешно инсталирана! 

От съображения за сигурност е необходимо да зададете правата на файла [b]e107_config.php[/b] отново на 644. 

Освен това е необходимо изтриването на install.php от вашия сървър след използването на бутона по-долу.");
define("LANINS_070", "e107 не можа да запише основния конфигурационен файл на вашия сървър. Моля убедете се, че файлът [b]e107_config.php[/b] има необходимите права");
define("LANINS_071", "Завършване на инсталацията");
define("LANINS_072", "Потребителско име на администратора");
define("LANINS_073", "Това е името, което ще ползвате за вход във Вашият сайт. Ако желаете това може да бъде и името, което ще бъде показвано.");
define("LANINS_074", "Админ Име за показване");
define("LANINS_076", "Администраторска парола");
define("LANINS_077", "Моля въведете тук администраторската парола, която искате да ползвате.");
define("LANINS_078", "Потвърждаване на Администраторска парола");
define("LANINS_079", "Моля въведете отново администраторската парола за потвърждение.");
define("LANINS_080", "Администраторски имейл");
define("LANINS_081", "Въведете вашия имейл адрес");
define("LANINS_083", "MySQL Грешка:");
define("LANINS_084", "Невъзможно е създаване на връзка с базата данни");
define("LANINS_085", "Невъзможно е избирането на база:");
define("LANINS_086", "Администраторско име, Администраторска парола и Администраторски имейл са задължителни полета. Моля върнете се обратно и се убедете че информацията е попълнена коректно.");
define("LANINS_105", "База данни с име или префикс, започващи с цифра следвана от “e” или “E”, не се допуска");
define("LANINS_106", "ВНИМАНИЕ - E107 няма права за запис в посочените директории и/или файлове. Това няма да спре инсталацията на E107, но някои функции няма да са достъпни. 
                Трябва да промените правата за достъп до файловете/директориите, за да имате пълен достъп до всички функции.");
define("LANINS_107", "Име на сайта");
define("LANINS_108", "напр. 'Моя блог'");
define("LANINS_109", "Тема на сайта");
define("LANINS_111", "Добави Съдържание/Конфигуриране");
define("LANINS_112", "Бързо възпроизвеждане на преглед на тема или демо. (Ако е налично)");
define("LANINS_113", "Моля попълнете името на сайта");
define("LANINS_114", "Моля изберете тема");
define("LANINS_115", "Име на темата");
define("LANINS_116", "Вид на темата");
define("LANINS_117", "Настройки на сайта");
define("LANINS_118", "Инсталирай модули");
define("LANINS_119", "Инсталирай всички модули, от които темата на сайта се нуждае.");
define("LANINS_120", "8");
define("LANINS_121", "Файлът e107_config.php не е празен");
define("LANINS_122", "Вероятно имате съществуваща инсталация");
define("LANINS_123", "По желание: Вашият публично име или псевдоним. Оставете празно за използване на името на потребителя");
define("LANINS_124", "Моля изберете парола не по-кратка от 8 знака");
define("LANINS_125", "Вашият е107 сайт е инсталиран успешно!");
define("LANINS_126", "От съображения за сигурност е необходимо да зададете правата на файла e107_config.php отново на 644.");
define("LANINS_127", "Базата данни [x] вече съществува. Презаписване? (всяка съществуваща информация в нея ще бъде изгубена)");
define("LANINS_128", "Презаписване");
define("LANINS_129", "Базата данни не е намерена.");
define("LANINS_134", "Инсталация");
define("LANINS_135", "от");
define("LANINS_136", "Изтриване на съществуващата база данни");
define("LANINS_137", "Намерени съществуваща база данни");
define("LANINS_141", "Моля, попълнете формуляра по-долу с вашите данни MySQL. Ако не знаете тази информация, моля, свържете се с вашия доставчик на хостинг услуги. Може да поставите Може да поставите курсора на мишката върху всяко поле за допълнителна информация");
define("LANINS_142", "ВАЖНО: Моля преименувайте e107.htaccess на .htaccess");
define("LANINS_144", "ВАЖНО: Моля, копирайте съдържанието на [b]e107.htaccess[/b] във вашия [b].htaccess[/b] file. Моля, внимавайте да не презапишете всички съществуващи данни.");
define("LANINS_145", "e107 v2.x изисква PHP версия [x] .Моля, свържете се с вашия хост или прочетете информацията в [y] преди да продължите.");
define("LANINS_146", "Дизайн на администрация");
define("LANINS_147", "Администрация");
