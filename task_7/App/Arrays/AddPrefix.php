<?php

namespace App\Arrays;
function addPrefix($array, $prefix)
{
    $result = [];
    for ($i = 0; $i < (count($array)); $i++) {
        $result[] = "{$prefix} {$array[$i]}";
    }
    $result = implode(' ', $result);
    return $result;
}
