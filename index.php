<?php

$name = 'иван';
$surname = 'орлов';
$patronymic = 'иванович';

//Полное имя
$fullName = $surname . ' ' . $name . ' ' . $patronymic;
$fullName = mb_convert_case($fullName, MB_CASE_TITLE, "UTF-8");

//Фамилия и инициалы
$patronymic = mb_strtoupper(substr($name,0,2), "utf-8");
$name = mb_strtoupper(substr($name,0,2), "utf-8");
$surname = mb_convert_case($surname, MB_CASE_TITLE, "UTF-8");
$surnameAndInitials = $surname . ' ' . $name .'.'.$patronymic.'.';

//Аббревиатура
$surname = mb_substr($surname, 0, 1, "UTF-8");
$fio = $surname.$name.$patronymic;

//Вывод
echo "Полное имя: '$fullName' ".PHP_EOL;
echo "Фамилия и инициалы: '$surnameAndInitials'".PHP_EOL;
echo "Аббревиатура: '$fio'\\";