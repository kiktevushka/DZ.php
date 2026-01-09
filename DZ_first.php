<?php

$n = readline("Имя: ");
$s = readline("Фамилия: ");
$p = readline("Отчество: ");


$name = mb_convert_case($n, MB_CASE_TITLE, "UTF-8");
$surname = mb_convert_case($s, MB_CASE_TITLE, "UTF-8");
$patronymic = mb_convert_case($p, MB_CASE_TITLE, "UTF-8");

$fullName = "$surname $name $patronymic";
$ni = mb_substr($name, 0, 1, "UTF-8");
$pi = mb_substr($patronymic, 0, 1, "UTF-8");
$si = mb_substr($surname, 0, 1, "UTF-8");

echo "\nРезультат:\n";
echo "Полное имя: $fullName\n";
echo "Инициалы: $surname $ni.$pi.\n";
echo "Аббревиатура: $si$ni$pi\n";

?>
