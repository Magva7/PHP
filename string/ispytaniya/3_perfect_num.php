<?php
/*Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.

<?php

isPerfect(6); // true
Совершенное число — это положительное целое число, равное сумме его положительных 
делителей (не считая само число). Например, 6 — совершенное число, потому что 6 = 1 + 2 + 3. */

function isPerfect($num){
    $i = 1;
    $sumDeviders = 0; // сумма делителей

    while($i < $num){ // пробегаемся по всем числам до конечного
        if (($num % $i)===0){ // если число делиться на текущее i без остатка, значит это делитель
            $sumDeviders = $sumDeviders + $i;
            // var_dump($i);
        }

        $i = $i + 1;
    }

    // print_r($sumDeviders);

    if($num===$sumDeviders){
        $result = 'true';
    } else{
        $result = 'false';
    }
    return $result;
}

print_r(isPerfect(28)); // true)