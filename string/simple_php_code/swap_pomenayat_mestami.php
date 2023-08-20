<?php
/*Реализуйте функцию swap(), которая меняет местами аргументы, переданные по ссылке:
 
$a = 5;
$b = 8;
swap($a, $b);
 
print_r($a); // 8
print_r($b); // 5
 */


$a = 51;
$b = 8212;

function swap(&$a, &$b){
    $swap1 = $a; //swap = 5, a = 5, b = 5
    $swap2 = $b; // swap = 5, a = 8, b = 8
    $a = $swap2;
    $b = $swap1;
};

//решение с Hexlet
// function swap(&$a, &$b)
// {
//     $c = $a;
//     $a = $b;
//     $b = $c;
// }

swap($a, $b);
 
print_r($a); // 8
print_r("\n"); // 8
print_r($b); // 5