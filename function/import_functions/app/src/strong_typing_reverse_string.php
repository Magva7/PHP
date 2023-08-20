<?php

/*Реализуйте функцию reverse(), которая переворачивает цифры в переданном числе:

<?php
 
use function App\Number\reverse;
 
reverse(13); // 31
reverse(-123); // -321
Не забудьте задать тип входного и выходного аргумента. */

function reverse(int $intString):int // указываем, что на входе и выходе должен быть int
{
    $isNegative = $intString < 0; // Сохраняем знак числа
    $str = strval($intString); // преобразовываем поступившие цифры в строку
    $i = 0;
    $result = '';

while ($i < strlen($str)) {
        $currentChar = $str[$i];
        $result = $currentChar . $result; // Соединяем в обратном порядке, если написать  $result . $currentChar, то будет в обычном, а не в обратном порядке
        $i = $i + 1;
    }

    if($isNegative){ // если есть знак минус
        $intResult = -intval($result); // преобразовываем строку обратно в цифры и добавляем минус в начале
    } else{
        $intResult = intval($result);
    }
  
return $intResult;
}

// более простое решение с Hexlet
// namespace App\Number;
// function reverse(int $num): int
// {
//     $reverse = (int) strrev((string) abs($num));
//     return $num >= 0 ? $reverse : -$reverse;
// }

$name = -123;
print_r(reverse($name)); // 'narB'