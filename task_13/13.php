<?php

function getIndexOfWarmestDay($array)
{
    $max = 0;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($array[$i][$j] > $max) {
                $max = $array[$i][$j];
                $index = $i;
            }
        }
    }
    echo $index;
}

getIndexOfWarmestDay([[1010, 200, 600], [205, 1028, 849, 456], [548, 149, 7840]]);

