<?php
/*Это задание не связано напрямую с уроком. Это просто ещё одно полезное упражнение по работе с функциями.

Напишите функцию getAgeDifference(), которая принимает два года рождения и возвращает строку с разницей в возрасте в виде 
The age difference is 11. Например:

<?php
 
$actual = getAgeDifference(2001, 2018);
print_r($actual); // => The age difference is 17
 
$actual2 = getAgeDifference(2020, 2002);
print_r($actual2); // => The age difference is 18
Подсказки
В PHP есть функция abs(), которая возвращает модуль переданного числа. Например, abs(-12) вернёт 12. */

function getAgeDifference($year1, $year2){
    $result = "The age difference is " . abs($year1 - $year2);
    return $result;
};

print_r(getAgeDifference(2020, 2002));