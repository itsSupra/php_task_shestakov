<?php

function getSameCount($arr1, $arr2)
{
    $j = 0;
    if (count($arr1) >= count($arr2)) {
        for ($i = 0; $i < count($arr1); $i++) {
            if (in_array($arr1[$i], $arr2)) {
                $j++;
            }
        }
    }
    if (count($arr1) < count($arr2)) {
        for ($i = 0; $i < count($arr1); $i++) {
            if (in_array($arr1[$i], $arr2)) {
                $j++;
            }
        }
    }
    echo $j;
}

getSameCount([1, 2, 3, 4], [1, 5, 3]);