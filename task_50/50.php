<?php
function Iter($n)
{
    $val0 = 2;
    $val1 = 1;

    echo $val0 . " " . $val1 . " ";
    for ($i = 1; $i < $n - 1; $i++) {
        $v = $val1 + $val0;
        $val0 = $val1;
        $val1 = $v;
        echo $v . " ";
    }
}

function Rec($n)
{
    if ($n == 1) return 2;
    else if ($n == 2) return 1;
    else {
        return Rec($n - 2) + Rec($n - 1);
    }
}

echo Iter(10) . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    echo Rec($i) . " ";
}