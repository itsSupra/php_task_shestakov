<?php

function sayPrimeOrNot($number)
{
    if ($number == 2)
        return 'yes';
    if ($number % 2 == 0)
        return 'no';
    $i = 3;
    $max_factor = (int)sqrt($number);
    while ($i <= $max_factor) {
        if ($number % $i == 0)
            return 'no';
        $i += 2;
    }
    return 'yes';
}

echo sayPrimeOrNot(5);
