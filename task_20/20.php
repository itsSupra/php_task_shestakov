<?php

function getIntersectionOfSortedArray($arr1, $arr2)
{
    if (empty($arr1) || empty($arr2)) {
        return 0;
    }
    $result = (array_uintersect($arr1, $arr2, "strcasecmp"));
    foreach ($result as $item) {
        echo $item . PHP_EOL;
    }
}


echo getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]);


