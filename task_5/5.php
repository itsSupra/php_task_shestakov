<?php
function discriminant($a, $b, $c)
{
    $d = $b * $b - 4 * $a * $c;
    if ($d > 0) {
        $x1 = (($b * -1) + sqrt($d)) / (2 * $a);
        $x2 = (($b * -1) - sqrt($d)) / (2 * $a);
        echo 'X1= ' . $x1;
        echo 'X2= ' . $x2;
    }
    if ($d == 0) {
        $x1 = -1 * ($b / (2 * $a));
        echo 'x1=x2= ' . $x1;
    }
    if ($d < 0) {
        echo 'D < 0, корней нет';
    }
}

echo discriminant(-2, 3, 9);
