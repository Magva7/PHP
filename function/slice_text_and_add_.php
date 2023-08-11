<?php
/*Реализуйте функцию truncate(), которая обрезает переданный текст и добавляет в конце многоточие.
 Подобная логика часто используется на сайтах, чтобы отобразить длинный текст в сокращенном виде. 
 Функция принимает два параметра:

Строка, которую нужно обрезать
Число символов, которые нужно оставить 
Реализовать эту функцию можно различными способами, подскажем лишь один из них. 
Для решения этим способом вам понадобится взять подстроку из строки, переданной первым 
параметром в функцию truncate(). Используйте для этого функцию substr(). 
Подумайте, с какого индекса и какой длины вам надо извлечь подстроку.
С точки зрения проверочной системы не имеет значения, каким из способов будет 
реализована функция truncate() внутри. Главное, чтобы она выполняла поставленную задачу.*/
function truncate($text, $count_char)
{
    $result = substr($text, 0, $count_char) . '...';
    return $result;
}

print_r(truncate('Hexlet', 4));