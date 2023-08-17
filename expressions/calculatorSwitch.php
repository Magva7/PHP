<?php
/*В этом задании вам предстоит реализовать простейший калькулятор. 
Функция calculate() принимает следующие аргументы:

Операция в виде строки (поддерживаются 4 операции +, -, /, *)
Два числа (первый и второй операнд)
Результатом работы функции является применения операции к этим числам.
Если передается операция, которая не поддерживается, то функция должна вернуть null:

<?php
 
calculate('+', 3, 10); // 13
calculate('-', -8, 6); // -14
calculate('$', 0, 9);  // null
 */

 function calculate($operation, $var1, $var2){
    $result = 0;
    switch($operation){
        case "+":
            $result = $var1 + $var2;
            break;
        case "-":
            $result = $var1 - $var2;
            break;
        case "/":
            $result = $var1 / $var2;
            break;
        case "*":
            $result = $var1 * $var2;
            break;
        default:
        $result = null;
    };

    return $result;
 };

 print_r(calculate('+', 3, 10));
 print_r("\n");
 print_r(calculate('-', -8, 6));
 print_r("\n");
 print_r(calculate('$', 0, 9));
 print_r("\n");
 print_r(calculate('#',1,1));