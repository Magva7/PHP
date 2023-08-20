<?php

namespace App\Symbols;

function isVowel($char) // на вход поступает 1 символ англ. алфавита
{
    $vowels = 'aeiouy';  // строка со всеми гласными английского алфавита

    // print_r('неймспейс App\Symbols успешно импортирован');

    // берет символ, который поступил на вход, переводит его в нижний регистр и потом проверяет,
    // содержится ли этот символ в строке $vowels. Если содержится, функция вернет true, иначе false
    return str_contains($vowels, strtolower($char));
}

// print_r("Количество гласных букв: \n");
print_r(isVowel('aeiouy'));