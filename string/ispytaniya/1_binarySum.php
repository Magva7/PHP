<?php
/*Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк)
 и возвращает их сумму. Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.

Посмотрите примеры работы функции:

<?php

binarySum('10', '1'); // 11
binarySum('1101', '101'); // 10010 */

function binarySum($num1Bynary, $num2Bynary){
    $num1Dec = bindec($num1Bynary); // переводим первое число в десятичную систему
    $num2Dec = bindec($num2Bynary);
    $sumDec =  $num1Dec + $num2Dec;
    $sumBynary = decbin($sumDec);
    print_r($sumBynary);
};

print_r(binarySum('10', '1')); // 11
print_r("\n");
print_r(binarySum('1101', '101')); // 10010