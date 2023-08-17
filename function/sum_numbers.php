<?php
/*Реализуйте функцию sumOfSeries(), которая считает сумму ряда целых чисел.
Ряд задается двумя числами — начальным и конечным.

Функция принимает два аргумента-числа и возвращает сумму ряда.
Например, для аргументов 4 и 7 сумма будет 4 + 5 + 6 + 7 = 22.
Если начальное и конечное числа равны, то результатом будет то же число:

<?php
 
sumOfSeries(1, 1); // 1
sumOfSeries(1, 3); // 6
sumOfSeries(4, 7); // 22
 */

function sumOfSeries($startNumber, $finishNumber){
    $result = 0;
    $i = $startNumber;
    while($i <= $finishNumber){
        $result = $result + $i;
        $i = $i + 1;
    }
    return $result;
};

print_r(sumOfSeries(1, 1));
// print_r(sumOfSeries(1, 3));
// print_r(sumOfSeries(4, 7));