<?php

function union($arr1, ...$arrN)
{
    return (array_values(array_unique(array_merge($arr1, ...$arrN))));
}

union([3, 2], [2, 2, 1]);