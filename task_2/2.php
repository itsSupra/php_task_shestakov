<?php

function isPalindrome($input)
{
    $reverse = strrev($input);
    if ($reverse == $input) {
        return true;
    } else {
        return false;
    }
}

$input = 'radar';
$result = isPalindrome($input);
if ($result == true) {
    echo $input . ' Это палиндром';
} else {
    echo $input . ' Это не палиндром';
}