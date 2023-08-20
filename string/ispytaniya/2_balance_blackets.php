<?php
/*Реализуйте функцию isBalanced(), которая принимает на вход строку, состоящую 
только из открывающих и закрывающих круглых скобок, и проверяет, является ли эта строка корректной. 
Пустая строка (отсутствие скобок) считается корректной.

Строка считается корректной (сбалансированной), если содержащаяся в ней скобочная структура соответствует требованиям:

Скобки — это парные структуры. У каждой открывающей скобки должна быть соответствующая ей закрывающая скобка.
Закрывающая скобка не должна идти впереди открывающей. Такой вариант недопустим )(, а вот такой допустим ()().

isBalanced('(())');  // true
isBalanced('((())'); // false */

function isBalanced($str){
    $result = 'false';
    $countOpenBracket = 0;
    $countCloseBracket = 0;

    $indexOpenBracket = strpos($str, '('); // индекс первого символа открывающей скобки
    $indexCloseBracket = strpos($str, ')'); // индекс первого символа закрывающей скобки

    if($indexOpenBracket < $indexCloseBracket ){ // проверяем, что открывающая скобка идет перед закрывающей, т.е. индекс у нее меньше
        $resultIndex = true; // тогда проверка на индекс тру
    };

    $i = 0;

    while($i < mb_strlen($str)){ // пробегаемся по всем символам
        $char = mb_substr($str, $i, 1); // Получаем текущий символ
        // print_r($char);

        if($char==='('){  // если текущий символ открывающая скобка
            $countOpenBracket = $countOpenBracket + 1; // увеличиваем счетчик открывающих скобок
        } else if($char===')'){
            $countCloseBracket = $countCloseBracket + 1; 
        };

        $i = $i + 1;
    };

    if($countOpenBracket===$countCloseBracket){ // проверяем, что количество открывающих скобок равно количеству закрывающих
        $resultCountBrackets = true; // тогда проверка на количество тру
    } else {
        $resultCountBrackets = false;
    };

    if($resultIndex && $resultCountBrackets){
        $result = 'true';
    };

    return $result;
};

// print(isBalanced('(())'));  // true
// print("\n");
print(isBalanced('((())')); // false */