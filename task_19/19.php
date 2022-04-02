<?php

function checkIfBalanced($string)
{
    $len = strlen($string);
    $stack = [];

    for ($i = 0; $i < $len; $i++) {
        $symbol = substr($string, $i, 1);
        if ($symbol == '(') {
            $stack[] = $symbol;
        } elseif ($symbol == ')') {
            if (!$last = array_pop($stack))
                return false;
            if ($symbol === ')' && $last != '(') {
                return false;
            }
        }
    }
    return count($stack) === 0;
}

echo checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)');
