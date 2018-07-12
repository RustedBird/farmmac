<?php
//объявляем константу содержащую путь до файлов языков
define('LANGUAGE_DIR', $_SERVER['DOCUMENT_ROOT']."/language/", false);
//тоже, путь до шаблона вывода
define('TEMPLATE_DIR', $_SERVER['DOCUMENT_ROOT']."/template/", false);

$langArray = ['ru', 'eng'];
$cookieLang = $_COOKIE['lang'];

//проверяем установлен ли в куках язык и есть ли он в массиве наших языков.
$language = isset($cookieLang) && in_array($cookieLang, $langArray) ? $cookieLang : 'ru';

//загружаем файл перевода
require_once(LANGUAGE_DIR . $language . '.php');

//загружаем файл шаблона, начинаем вывод
require_once(TEMPLATE_DIR . 'default.php');