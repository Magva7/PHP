<?php

$char = 'Aбв';

// if (ctype_alpha($char)) {
//     echo "$char - это буква";
// } else {
//     echo "$char - это не буква";
// }

if (ctype_upper(mb_substr($char, 1, 1, 'UTF-8'))) {
    echo mb_substr($char, 1, 1, 'UTF-8') . " - это заглавная буква";
} else {
    echo mb_substr($char, 1, 1, 'UTF-8') . " - это не заглавная буква";
}