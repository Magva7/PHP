<?php
/*Допишите реализацию функции invertCase(), которая инвертирует регистр 
каждого символа в переданной строке:

<?php
 
$str = 'ПрИвЕт!';
invertCase($str); // пРиВеТ!
 */

 function invertCase($text){
    $i = 0;
    $invertedString = "";
    while($i < mb_strlen($text)){
        $char = mb_substr($text, $i, 1); // Получаем текущий символ
        // print_r($char);
        if ((mb_strtoupper($char, 'UTF-8') === $char)) { /*переводим символ в верхний регистр и 
            сравниваем с изначальным, если равны, значит символ в верхем регистре */ 
            $invertedString .= mb_strtolower($char, 'UTF-8');  // то переводим в нижний и добавляем к строке
            // print_r('Тест1 - в верхнем');
        } else if (mb_strtolower($char, 'UTF-8') === $char) {
            $invertedString .= mb_strtoupper($char, 'UTF-8');
            // print_r('Тест2 - в нижнем');
        } else {
            $invertedString .= $char;
            // print_r('Тест3 - не буква');
        }

        $i = $i + 1;
    }
    return $invertedString;
}

$str = 'ПрИвЕт!';
$str = 'ONE';
$str = 'one';
print_r(invertCase($str)); // пРиВеТ!
