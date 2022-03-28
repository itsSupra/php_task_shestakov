<?php

function calculateAverage($temperatures = [])
{
    if ($temperatures == null) {
        echo 'null';
    } else {
        echo array_sum($temperatures) / count($temperatures);
    }
}

calculateAverage([37.5, 34, 39.3, 40, 38.7, 41.5]);
