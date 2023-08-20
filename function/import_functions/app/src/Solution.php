<?php

/*Реализуйте функцию countVowels(), которая принимает строку, считает 
и возвращает количество гласных букв в ней.

Для проверки, является ли буква гласной, импортируйте и используйте функцию isVowel(). 
Неймспейс, в котором находится функция определён в файле Symbols.php, сам файл включать не нужно:

Пример использования:

<?php
 
countVowels('One'); // 2
countVowels('London is the capital of Great Britain'); // 13
 */

namespace App\Solution;
// namespace App\Symbols;
require_once 'Symbols.php'; // здесь я подключаю файл вручную, а в задании он уже как бы подключен через composer

// BEGIN (write your solution here)
use function App\Symbols\isVowel;
function countVowels($str)
{
    $countVowelChar = 0; //количество гласных букв

    //пробегаемся по всем символам в переданной строке
    $i = 0;
    while($i < mb_strlen($str)){
        $currentChar = mb_substr($str, $i, 1); // Получаем текущий символ
        // print_r($char); // печатаем текущий символ для теста
        $currentCharVowel = isVowel($currentChar); // передаем текущий символ в функцию, которая проверяет, гласная это буква или нет и возвращает 1 или 0
        if($currentCharVowel){ // если вернулась 1, т.е. текущий символ это гласная буква
            $countVowelChar = $countVowelChar + 1;  // увеличиваем счетчик гласных букв на 1
        }
        $i = $i + 1;
    }
    $result = $countVowelChar;
    return $result;
}; 
// END
// BEGIN
// use function App\Symbols\isVowel;

// function countVowels($text)
// {
//     $len = strlen($text);
//     $result = 0;

//     for ($i = 0; $i < $len; $i++) {
//         if (isVowel($text[$i])) {
//             $result += 1;
//         }
//     }

//     return $result;
// }
// END
print_r(countVowels('London is the capital of Great Britain')); // 13