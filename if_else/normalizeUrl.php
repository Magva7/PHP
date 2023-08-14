<?php
/*Реализуйте функцию normalizeUrl(), которая выполняет так называемую нормализацию данных. 
Она принимает адрес сайта и возвращает его с https:// в начале.

Функция принимает адреса в виде:

АДРЕС
http://АДРЕС
https://АДРЕС
Но всегда возвращает URL в виде https://АДРЕС:
 
normalizeUrl('google.com');          // 'https://google.com'
normalizeUrl('http://ai.fi');        // 'https://ai.fi'
normalizeUrl('https://hexlet.io');   // 'https://hexlet.io'
Подсказки
Есть два пути решения:

Сравнить первые символы в адресе со строкой http:// или https://
Использовать функцию strpos, чтобы проверить, содержится ли в адресе подстрока http:// или https://
А потом на основе этого добавлять или не добавлять https:// */

$url1 = 'google.com';
$url2 = 'http://ai.fi';
$url3 = 'https://hexlet.io';

function normalizeUrl($url){
    if (strstr($url, 'https://')){ // если в переменной $url есть https
        $resultUrl = $url; // то возвращаем ее в изначальном виде
    } elseif(strstr($url, 'http://')){ // если в переменной $url есть http
        $resultUrl = str_replace("http", "https", $url); // то меняем http на https
    } else {  // если нет ни того, ни другого
        $resultUrl = 'https://' . $url;  // то добавляем в начале https://
    };
    return $resultUrl;
};

print_r(normalizeUrl($url1) . "\n");
print_r(normalizeUrl($url2) . "\n");
print_r(normalizeUrl($url3));