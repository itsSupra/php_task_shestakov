<?php
function isPalindrome($text)
{
    static $i = 0;

    $length = strlen($text);
    $middle = ceil($length / 2);
    $text_1 = str_split($text);

    if ($i < $middle) {
        if ($text_1[$i] == $text_1[$length - $i - 1]) {
            ++$i;
            isPalindrome($text);
        }
    }

    if ($i == $middle) return true;
}

echo isPalindrome('radar');
