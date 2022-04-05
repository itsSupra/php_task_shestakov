<?php

function getDifference($arr1, $arr2)
{
    $filter = array_filter($arr1, function ($el) use ($arr2) {
        return !in_array($el, $arr2);
    });
    return array_values($filter);
}