<?php

function swap(int $a, int $b)
{
    $a = $a ^ $b;
    $b = $b ^ $a;
    $a = $a ^ $b;
    echo $a, $b;
}

swap(2, 5);