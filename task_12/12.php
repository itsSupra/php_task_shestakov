<?php

function getSameParity($arr)
{
    if (empty($arr)) {
        echo '[]';
    }
    if ($arr[0] % 2 == 0) {
        foreach ($arr as $item) {
            if ($item % 2 == 0) {
                echo $item;
            }
        }
    }
    if ($arr[0] % 2 !== 0) {
        foreach ($arr as $item) {
            if ($item % 2 !== 0) {
                echo $item;
            }
        }
    }
}

getSameParity([2, 2, 3, 4, 5, 6]);