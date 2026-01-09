<?php


$name = readline("Имя: ");
$surName = readline("Фамилия: ");
$lastName = readline("Отчество: ");


$nameCapital = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
$surnameCapital = mb_convert_case($surName, MB_CASE_TITLE, "UTF-8");
$lastNameCapital = mb_convert_case($lastName, MB_CASE_TITLE, "UTF-8");

$fullName = "$surnameCapital $nameCapital $lastNameCapital";
$nameInitial = mb_substr($nameCapital, 0, 1, "UTF-8");
$lastNameInitial = mb_substr($lastNameCapital, 0, 1, "UTF-8");
$surNameInitial = mb_substr($surnameCapital, 0, 1, "UTF-8");

echo "\nРезультат:\n";
echo "Полное имя: $fullName\n";
echo "Инициалы: $surnameCapital $nameInitial.$lastNameInitial.\n";
echo "Аббревиатура: $surNameInitial$nameInitial$lastNameInitial\n";

?>
