<!-- Вывод helloworld -->
<?php
function helloworld($str){
    $result = '';
    for ($i = 0; $i < strlen($str); $i++)
    {   
    $result .= decbin(ord($str[$i]));
    }
    return $result;
}