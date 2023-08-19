<?php
namespace Solution;

require_once 'Strings.php';
function isPalindrome($text){
    $reverseString = \Strings\reverse($text);
    if($text === $reverseString){
        $result = true;
    } else {
        $result = false;
    };

    return $result;
};

print_r(isPalindrome('radaredws'));