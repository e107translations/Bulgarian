<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2010 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Linkwords plugin - language file (only needed for admin)
 *
 * $Id*
 */

//define("LWLAN_1", "Оставени са празни полета.");
//define("LWLAN_2", "Линк-думата е записана.");
//define("LWLAN_3", "Линк-думата е обновена.");
define("LWLAN_4", "Все още няма дефинирани Линк-думи.");
define("LWLAN_5", "Дума");
define("LWLAN_6", "Линк");
define("LWLAN_7", "Активна?");
//define("LWLAN_8", "Опции");
//define("LWLAN_9", "да");
//define("LWLAN_10", "не");
define("LWLAN_11", "Съществуващи линк-думи");
//define("LWLAN_12", "Да");
//define("LWLAN_13", "Не");
//define("LWLAN_14", "Създай Линк-Дума");
//define("LWLAN_15", "Обнови  Линк-Дума");
//define("LWLAN_16", "Редакция");
//define("LWLAN_17", "Изтриване");
define("LWLAN_18", "Сигурен ли си че искаш да изтриеш тези линк-думи?");
//define("LWLAN_19", "Линк-думата е изтрита.");
define("LWLAN_20", "Невъзможно е намирането на тази линк-дума.");
define("LWLAN_21", "Дума за авто-линк");
define("LWLAN_22", "Активирай?");
define("LWLAN_23", "Администрация на линк-думи");
define("LWLAN_24", "Управление на думи");
//define("LWLAN_25", "Опции");
define("LWLAN_26", "Зона за активиране на линк-думи");
define("LWLAN_27", "Това е 'контекстът' на показания текст");
define("LWLAN_28", "Страници с деактивирани линк-думи");
define("LWLAN_29", "Същият формат, както контрола за видимост на менютата - по една стойност на ред. Задайте част или пълно URL. Добавете '!' накрая за точно съвпадение на завършващата част на линка");
//define("LWLAN_30", "Запиши");
define("LWLAN_31", "Добавяне/Редакция");
//define("LWLAN_32", "Опции");
define("LWLAN_33", "В заглавия");
define("LWLAN_34", "В резюме");
define("LWLAN_35", "В съдържание");
define("LWLAN_36", "Описания (линкове и т.н.)");
//define("LWLAN_37", "Завещани зони");
//define("LWLAN_38", "Линкове");
//define("LWLAN_39", "Необработен текст");
define("LWLAN_40", "Заглавия вписани от потребители (напр. във форума)");
define("LWLAN_41", "Текст вписан от потребители (напр. във форума)");
// Reserve numbers for further context strings



define("LWLAN_50", "Подсказки");
define("LWLAN_51", "Неактивно");
define("LWLAN_52", "Линк думи само");
define("LWLAN_53", "Tooltip само");
define("LWLAN_54", "Линк думи и Tooltip");
define("LWLAN_55", "Отвори линка в нов прозорец");
define("LWLAN_56", "Отвори линка в нова страница");
//define("LWLAN_57", "Грешка при записване на новата стойност");
define("LWLAN_58", "Настройките на хитрости са конвертирани към 0.8 формат");
define("LWLAN_59", "Разреши Ajax функционалността ");
define("LWLAN_60", "ЛД ИД");
//define("LWLAN_61", "ИД");
define("LWLAN_62", "Подсказки ИД (ЛД ИД)");
define("LWLAN_63", "(Само положителни числа)");
define("LWLAN_64", "Подтисни линка на настоящата страница");
define("LWLAN_65", "Ако е отметнато, подтиска линка ако е насочен към настоящата страница");


// Installation-related
//define("LWLANINS_1", "Линк Думи");
//define("LWLANINS_2", "Този модул ще замени думи по желание със специално зададен линк");
//define("LWLANINS_3", "Конфигурирай Линк Думи");
//define("LWLANINS_4", "За конфигуриране моля кликнете линка в секция Модули от началната админ страница");
//define("LWLANINS_5", "Обновяването е успешно");


// Help text
define("LAN_LW_HELP_00", "Линк думи - Помощ");
define("LAN_LW_HELP_01", "
<b>Зони за разрешения</b><br />
Много от текстовите зони съдържат асоцииран 'контекст' и линк думите ще се показват само, когато се отнасят до този контекст.<br /><br />
<b>Линк Думи - Забраняване</b><br />
Линк думи може да се забрани на специфични страници или страници отговарящи на определен модел. Въведете ги тук (същият синтаксис като за менюта), по един модел на ред.
Ако моделът завършва с \'!\', това кореспондира с \'end of query\', и обикновено е точно съвпадение. В противен случай ще съвпадне с всяко URL, съдържащо посочениият низ.<br />
Отбележете, че линк думите <i>никога</i> няма да си показват в администраторските страници.<br /><br />
<b>Разрешете Ajax функционалността</b><br />
Подсказките да използвате Ajax за да получите информация за дисплея. Това обикновено изисква някои потребителски кодирания.<br /><br />
<b>Подтискане на линк на текущата страница</b><br />
Обикновено това е безсмислено за потребителя да може да кликнете върху връзка, ако той е вече на страницата. Отбележете това квадратче, за да премахнете опцията,<br />
");
define("LAN_LW_HELP_02","Define the words which become clickable links, or which display text on mouseover, here<br /><br />
<b><u>Word to Link</u></b><br />
This is case-insensitive. For multiple words mapping to the same links and tooltips, separate them with commas (no spaces)<br /><br />
<b><u>Link</u></b><br />
Define a clickable link here. If its an external link, it [i]must[/i] begin \"http://\". If its a link within this site, the normal {e_XXX} constants may be used.<br /><br />
<b><u>Tooltip</u></b><br />
This defines the text to be displayed when the user\"s mouse passes over the word.<br /><br />
<b><u>LW ID (Tooltip ID)</u></b><br /><br />
This defines an optional numeric ID to be used with Ajax processing. If blank, the database record number is used.<br /><br />
<b><u>Activate?</u></b><br />
Defines which options are active.
");





?>