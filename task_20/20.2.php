<?php

function getIntersectionOfSortedArray2($arr1, $arr2)
{
    if (empty($arr1) || empty($arr2)) {
        return 0;
    }
    $res = [];
    foreach ($arr1 as $el) {
        foreach ($arr2 as $el2) {
            if ($el === $el2) {
                $res[] = $el;
                break;
            }
        }
    }
    return implode("<br/>", $res);
}

echo(getIntersectionOfSortedArray2([10, 11, 24], [10, 13, 14, 18, 24, 30]));