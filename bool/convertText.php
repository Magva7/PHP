<?php
/*Реализуйте функцию convertText(), которая принимает на вход строку.
 Если первая буква не заглавная, возвращает перевернутый вариант исходной строки.
 Если первая буква заглавная, то строка возвращается без изменений:

<?php
 
convertText('Hello'); // 'Hello'
convertText('hello'); // 'olleh'
Перевернуть строчку можно, используя функцию strrev().

Есть разные подходы к решению этой задачи. 
Возможно, вам пригодятся функции ucfirst(), strtoupper() 
и возможность получения символа из строки (например, $str[0]).

Попробуйте написать два варианта функции: с обычным if-else и с тернарным оператором. */

// стандартный метод
// function convertText($string){
//     $stringFirstLetterUppercase = ucfirst($string); // преобразовываем 1-ый символ в строке в заглавный
//     // и сохраняем в переменную
//     if($stringFirstLetterUppercase === $string){ // если преобразованная строка равна изначальной, 
//         // значит в изначальной первая буква была заглавная
//         $result = $string;
//     } else{ // если первая буква не заглавная
//             $result = strrev($string);  // тогда перворачиваем строку
//         };
//     return $result;
// };

// через элвис
function convertText($string){
    $stringFirstLetterUppercase = ucfirst($string); // преобразовываем 1-ый символ в строке в заглавный
    // и сохраняем в переменную
    ($stringFirstLetterUppercase === $string) ? $result = $string : $result = strrev($string);
    return $result;
};

print_r(convertText('Hello') . "\n");
print_r(convertText('hello'));