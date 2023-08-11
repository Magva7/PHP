<?php
/*Реализуйте функцию getFormattedBirthday(), которая принимает на вход три параметра: 
день, месяц и год рождения. Она возвращает их строкой в отформатированном виде, например: 20-02-1953.

<?php
 
$result = getFormattedBirthday(20, 2, 1953);
print_r($result); // => 20-02-1953
День и месяц нужно форматировать так, чтобы при необходимости добавлялся 0 слева. 
Например, если в качестве месяца пришла цифра 7, то в выходной строке она должна быть представлена как 07. */
function getFormattedBirthday($day, $month, $year)
{
    $resultString = sprintf('%02d-%02d-%d', $day, $month, $year);
    return $resultString;
}

print_r(getFormattedBirthday(20, 2, 1953));