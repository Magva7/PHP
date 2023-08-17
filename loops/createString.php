<?php
/*Реализуйте функцию joinNumbersFromRange(), которая объединяет все числа из диапазона в строку:

<?php
 
joinNumbersFromRange(1, 1);  // '1'
joinNumbersFromRange(2, 3);  // '23'
joinNumbersFromRange(5, 10); // '5678910'
 */

function joinNumbersFromRange($startNumber, $finishNumber){
    $resultString = '';
    $i = $startNumber;

    while ($i <= $finishNumber){
        $resultString = $resultString . $i;
        $i = $i + 1;
    };

    return $resultString;
 };

 print_r(joinNumbersFromRange(1, 1) . "\n");
 print_r(joinNumbersFromRange(2, 3) . "\n");
 print_r(joinNumbersFromRange(5, 10));