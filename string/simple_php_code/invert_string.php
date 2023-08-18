<?php
function reverse($str)
{
    $i = 0;
    // Нейтральный элемент для строк — это пустая строка
    $result = '';
while ($i < strlen($str)) {
        $currentChar = $str[$i];
        $result = $currentChar . $result; // Соединяем в обратном порядке, если написать  $result . $currentChar, то будет в обычном, а не в обратном порядке
        $i = $i + 1;
    }
return $result;
}

$name = 'Bran';
print_r(reverse($name)); // 'narB'