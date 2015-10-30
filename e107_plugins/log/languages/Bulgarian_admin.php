<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

//define("ADSTAT_ON", "Включен");
//define("ADSTAT_OFF", "Изключен");
define("ADSTAT_LAN_1", "Този плъгин записва всички визити на сайта ви, и изгражда детайлна статистика базирана на взетата информация.");
define("ADSTAT_LAN_2", "Статистиката е инсталирана успешно. За да я активирате, моля вървете в конфигурация и кликнете на Активиране.<br /><b>Трябва да промените правата за запис в e107_plugins/log/logs папката на 777 (chmod 777)</b>");
define("ADSTAT_LAN_3", "Статистика на сайта");
define("ADSTAT_LAN_4", "Активиране на статистиката на сайта");
define("ADSTAT_LAN_5", "Тип статистика");
define("ADSTAT_LAN_6", "Браузъри");
define("ADSTAT_LAN_7", "Операционни системи");
define("ADSTAT_LAN_8", "Разделителна способност на екрана");
define("ADSTAT_LAN_9", "Страни / Домейни");
define("ADSTAT_LAN_10", "Препращания");
define("ADSTAT_LAN_11", "Търсения");
define("ADSTAT_LAN_12", "Нулирай");
define("ADSTAT_LAN_13", "това ще нулира статистиката до момента - внимателно!");
define("ADSTAT_LAN_14", "На посетените странници от сайта");
//define("ADSTAT_LAN_15", "Обновяване на настройките");
define("ADSTAT_LAN_16", "Настройки на модул Статистика на сайта");
//define("ADSTAT_LAN_17", "Настройките са обновени");
define("ADSTAT_LAN_18", "Позволи достъп до статистиката на ...");
define("ADSTAT_LAN_19", "Препратени посетители");
define("ADSTAT_LAN_20", "Добавяй и визитите на администраторите");
define("ADSTAT_LAN_21", "Максимален брой записи за показване на странница");
define("ADSTAT_LAN_22", "Обнови за нова система");
define("ADSTAT_LAN_23", "лога от предната версия на e107 е намерен, обнови го от тук");
define("ADSTAT_LAN_24", "Обнови скрипта");
//define("ADSTAT_LAN_25", "Избраните статистики са нулирани");
define("ADSTAT_LAN_26", "Премахни записи на странници");
define("ADSTAT_LAN_27", "ако в статистиката има некоректни странници, Вие можете да ги махнете от тук");
define("ADSTAT_LAN_28", "Отвори странница");
define("ADSTAT_LAN_29", "Име на странницата");
define("ADSTAT_LAN_30", "Маркирай за премахване");
define("ADSTAT_LAN_31", "премахни маркираните странница");
define("ADSTAT_LAN_32", "Подредба на странниците");
//define("ADSTAT_LAN_33", "Конфигуриране записване на статистиката");
//define("ADSTAT_LAN_34", "Статистика за сайта");
define ('ADSTAT_LAN_35', 'Options');
define ('ADSTAT_LAN_36', 'Data Export');
//define ('ADSTAT_LAN_37', 'Create export file');
define ('ADSTAT_LAN_38', "You must set the e107_plugins/log/logs folder to be writable");
define ('ADSTAT_LAN_39', 'Stats Logging Functions');
define ('ADSTAT_LAN_40', 'Export log data');
define ('ADSTAT_LAN_41', 'Date selection');
define ('ADSTAT_LAN_42', 'Single Day');
define ('ADSTAT_LAN_43', 'Daily for a month');
define ('ADSTAT_LAN_44', 'Monthly for a year');
define ('ADSTAT_LAN_45', 'All-time');
define ('ADSTAT_LAN_46', 'Date:');
define ('ADSTAT_LAN_47', 'Invalid date chosen');
define ('ADSTAT_LAN_48', 'Monthly and All-time');
define ('ADSTAT_LAN_49', 'All-time Only');
define ('ADSTAT_LAN_50', 'None');
define ('ADSTAT_LAN_51', 'Output Data');
define ('ADSTAT_LAN_52', 'Page Data');
define ('ADSTAT_LAN_53', 'No selection possible');
define ('ADSTAT_LAN_54', 'Invalid type selection');
define ('ADSTAT_LAN_55', 'Single quote');
define ('ADSTAT_LAN_56', 'Double quote');
define ('ADSTAT_LAN_57', 'Comma');
define ('ADSTAT_LAN_58', 'Pipe (|)');
define ('ADSTAT_LAN_59', 'CSV separator, quotes');
define ('ADSTAT_LAN_60', 'Strip site address from URLs');
define ('ADSTAT_LAN_61', '(if checked, just gives page reference)');
define ('ADSTAT_LAN_62', 'All-time (detailed)');
define ('ADSTAT_LAN_63', 'Available Datasets');
define ('ADSTAT_LAN_64', 'Database records found:');
define ('ADSTAT_LAN_65', 'DB filter string:');
define ('ADSTAT_LAN_66', 'Show Datasets');
define ('ADSTAT_LAN_67', 'Generate a CSV (Comma Separated Variable) file of historical statistics which meets the specified criteria');
define ('ADSTAT_LAN_68', 'Show the statistics database entries which actually exist and meet the selection criteria');
define ('ADSTAT_LAN_69', 'Delete historical data');
define ('ADSTAT_LAN_70', 'Delete data older than:');
define ('ADSTAT_LAN_71', 'Delete Data');
define ('ADSTAT_LAN_72', 'Confirm deletion of data older than first day of:');
//define ('ADSTAT_LAN_73', 'Confirm');
define ('ADSTAT_LAN_74', '(List of data entries which will be deleted below)');
define ('ADSTAT_LAN_75', 'Records for deletion');
define ('ADSTAT_LAN_76', 'Caution! Once deleted, the data cannot be recovered. Backup or export your database first');
define ('ADSTAT_LAN_77', 'Records deleted:');
define ('ADSTAT_LAN_78', 'Show previous month as well as current month for non-page access stats');
define ('ADSTAT_LAN_79', 'Only used if monthly stats collected');
define ('ADSTAT_LAN_80', 'The following pages were deleted:');
define ('ADSTAT_LAN_81', 'Statistics cleared:');
define ('ADSTAT_LAN_82', 'Following values now set:');
define ('ADSTAT_LAN_83', 'Following log ID entries removed:');
define ('ADSTAT_LAN_84', '');
define ('ADSTAT_LAN_85', '');



?>