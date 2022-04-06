<?php

function avg($arr)
{
    return array_sum($arr) / count($arr);
}

function avgGeom($arr)
{
    foreach ($arr as $i => $n) $m = $i == 0 ? $n : $m * $n;
    return $m ** (1 / count($arr));
}

function avgGarm($arr)
{
    $res = 0;
    foreach ($arr as $value) {
        $res += 1 / $value;
    }
    return count($arr) / $res;
}

function mediana($arr)
{
    sort($arr);

    if (count($arr) % 2 != 0) {
        $med = floor(count($arr) / 2);
        return $arr[$med];
    }

    $med = count($arr) / 2;
    $v2 = $arr[$med];
    $v1 = $arr[$med - 1];
    return ($v1 + $v2) / 2;
}

function moda($arr)
{
    $val = array_count_values($arr);
    return array_search(max($val), $val);
}

function avgSqrDevi($arr)
{
    $res = 0;
    foreach ($arr as $v) {
        $res += ($v - avg($arr)) ** 2;
    }
    return sqrt($res / count($arr));
}

$arr = [2, 1, 3, 4, 7, 11, 18, 29, 47, 76];

echo avg($arr) . PHP_EOL;
echo avgGeom($arr) . PHP_EOL;
echo avgGarm($arr) . PHP_EOL;
echo mediana($arr) . PHP_EOL;
echo moda($arr) . PHP_EOL;
echo avgSqrDevi($arr) . PHP_EOL;
