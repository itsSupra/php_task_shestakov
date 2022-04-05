<?php

namespace App\Arrays;

function genDiff($arr1, $arr2)
{
    $res = [];
    foreach ($arr1 as $item1 => $value1) {
        foreach ($arr2 as $item2 => $value2) {
            if ($value1 == $value2 && $item1 == $item2) {
                $res[$item1] = 'unchanged';
            }
            if ($item1 == $item2 && $value1 !== $value2) {
                $res[$item1] = 'changed';
            }
            if (array_key_exists($item1, $arr1) && !array_key_exists($item1, $arr2)) {
                $res[$item1] = 'deleted';
            }
            if (!array_key_exists($item2, $arr1) && array_key_exists($item2, $arr2)) {
                $res[$item2] = 'add';
            }
        }
    }
    print_r($res) . PHP_EOL;
}

