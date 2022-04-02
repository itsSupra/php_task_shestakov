<?php

function findIndex($temperatures, $p)
{
    for ($i = 0; $i < count($temperatures); $i++) {
        if ($temperatures[$i] == $p) {
            return $i;
        }
    }
    return -1;
}

echo findIndex([37.5, 34, 39.3, 40, 38.7, 41.5, 40], 40);
