<?php
/*Реализуйте функцию-предикат isArgumentsForSubstrCorrect(), которая принимает три аргумента:

Строку
Индекс, с которого начинать извлечение
Длину извлекаемой подстроки
Не всегда значения, которые передаются в функцию, бывают корректными. 
Поэтому функция возвращает false, если хотя бы одно из условий истинно:

Отрицательная длина извлекаемой подстроки
Отрицательный заданный индекс
Заданный индекс выходит за границу всей строки
Длина подстроки в сумме с заданным индексом выходит за границу всей строки
В ином случае функция возвращает true.

Не забывайте, что индексы начинаются с 0, поэтому индекс последнего элемента — 
это «длина строки минус 1»:

<?php
 
$str = 'Sansa Stark';
isArgumentsForSubstrCorrect($str, -1, 3);  // false
isArgumentsForSubstrCorrect($str, 4, 100); // false
isArgumentsForSubstrCorrect($str, 10, 10); // false
isArgumentsForSubstrCorrect($str, 11, 1);  // false
isArgumentsForSubstrCorrect($str, 3, 3);   // true
isArgumentsForSubstrCorrect($str, 0, 5);   // true
 */

function isArgumentsForSubstrCorrect($str, $startIndex, $lengthSubstring){
    $result = true;
    
    if ($lengthSubstring < 0){ //если отрицательная длина извлекаемой подстроки
        $result = false;
    }

    if ($startIndex < 0){ //если отрицательный заданный индекс
        $result = false;
    }

    if ($startIndex >= strlen($str)){ //если заданный индекс выходит за границу всей строки
        $result = false;
    }

    // if (($lenghtSubstring + $startIndex) > strlen($str)){ //длина подстроки в сумме с заданным индексом выходит за границу всей строки
    //     $result = false;
    // }

    if (($lengthSubstring + $startIndex) > strlen($str) || ($lengthSubstring < 0 && abs($lengthSubstring) > $startIndex)) {
        // длина подстроки в сумме с заданным индексом выходит за границу всей строки
        // или отрицательная длина подстроки больше, чем заданный индекс
        $result = false;
    }
    return $result;
};

$str = 'Sansa Stark';
// print_r(isArgumentsForSubstrCorrect($str, -1, 3));  // false
// print_r(isArgumentsForSubstrCorrect($str, 4, 100)); // false
// print_r(isArgumentsForSubstrCorrect($str, 10, 10)); // false
// print_r(isArgumentsForSubstrCorrect($str, 11, 1));  // false
// print_r(isArgumentsForSubstrCorrect($str, 3, 3));   // true
// print_r(isArgumentsForSubstrCorrect($str, 0, 5));   // true
print_r(isArgumentsForSubstrCorrect($str,11,0));