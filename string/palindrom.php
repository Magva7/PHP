<?php
/*Реализуйте функцию isPalindrome(), которая принимает на вход слово и определяет, 
является ли оно палиндромом, а затем возвращает логическое значение.

Чтобы определить палиндром, достаточно сравнивать попарно символы с обоих концов слова. 
Если они все равны, это палиндром. Решите задачу без использования реверса строки (функция strrev()).

Примеры использования:

<?php
 
isPalindrome('radar'); // true
isPalindrome('maam'); // true
isPalindrome('a');     // true
isPalindrome('abs');   // false
// Функция должна уметь работать с юникодом
isPalindrome('шалаш'); // true */

function isPalindrome($str)
    // {
    // //вариант 1 - переворачиваем строку
    //     $i = 0;
    //     $reverseStr = '';
    // while ($i < mb_strlen($str)) {
    //         $currentChar = mb_substr($str, $i, 1);
    //         // var_dump($currentChar);
    //         $reverseStr = $currentChar . $reverseStr; // Соединяем в обратном порядке, если написать  $result . $currentChar, то будет в обычном, а не в обратном порядке
    //         $i = $i + 1;
    //     }

    // if($str === $reverseStr){
    //     $result = 'true';
    // } else{
    //     $result = 'false';
    // }
    // // var_dump($reverseStr);
    
    // return $result;
    // }
    //вариант 2 - сравниваем крайние символы
    {            
        $i = 0;
        $k = 1;
        $reverseStr = '';
        $result = false;

        while ($i < mb_strlen($str)) {
            $currentFirstChar = mb_substr($str, $i, 1); // текущий символ с начала строки
            // var_dump($currentFirstChar);
            $currentLastChar = mb_substr($str, 0-$k, 1); //текущий символ с начала строки
            // var_dump($currentLastChar);
            // var_dump($k);
            if($currentFirstChar === $currentLastChar){
                // print_r("итерация {$i} символы {$currentFirstChar} и {$currentLastChar} равны \n");
                // var_dump($currentFirstChar);
                $reverseStr = $currentFirstChar . $reverseStr;
                // var_dump($reverseStr);
            } else{
                // print_r("итерация {$i} символы {$currentFirstChar} и {$currentLastChar} не равны \n");
            }
            
            $i = $i + 1;
            $k = $k + 1;

        }

        if($str === $reverseStr){
            $result = true;
         
        }
        return $result;
    }
print_r(isPalindrome('radar'));