<?php
/*Модифицируйте функцию printNumbers() так, чтобы она выводила числа в обратном порядке. 
Для этого нужно идти от верхней границы к нижней. 
То есть, счетчик должен быть инициализирован максимальным значением, 
а в теле цикла его нужно уменьшать до нижней границы:

<?php
 
printNumbers(4);
// => 4
// => 3
// => 2
// => 1
// => finished!
 */

function printNumbers($firstNumber){
    $i = $firstNumber;
    while ($i > 0){
        print_r($i. "\n");
        $i = $i-1;
    };
    print_r("finished!");
 };

 print_r(printNumbers(4));