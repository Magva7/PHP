<?php
/*Реализуйте функцию isPalindrome, которая принимает на вход слово и определяет, 
является ли оно палиндромом, а затем возвращает логическое значение.

В отличие от предыдущей реализации, выполните эту более простым способом — 
через сравнение исходной строки с ее перевернутой версией. Если они между собой равны, то это палиндром.
Для переворота строки воспользуйтесь функцией reverse, которая находится в файле src/Strings.php. */

require_once 'Strings.php';
function isPalindrome($text){
    $reverseString = reverse($text);
    if($text === $reverseString){
        $result = true;
    } else {
        $result = false;
    };

    return $result;
};

print_r(isPalindrome('radaredws'));