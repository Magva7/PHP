<?php

namespace Strings;

function reverse($str)
{
    $index = strlen($str) - 1;
    $reversedString = '';

    while ($index >= 0) {
        $currentChar = $str[$index];
        $reversedString = "{$reversedString}{$currentChar}";
        $index = $index - 1;
    }

    return $reversedString;
}
// print_r('Тест - файл Strings.php с пространством имен Strings подключен успешно.');