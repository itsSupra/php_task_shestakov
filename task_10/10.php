<?php

function isContinuousSequence($arr1)
{
    $arr = $arr1;

    if (empty($arr)) {
        echo "false - пустой массив!";
    } else {
        if (count($arr) == 1) {
            echo "false - всего 1 элемент в массиве!";
        } else {
            for ($i = 1; $i < sizeOf($arr); $i++) {
                if ($arr[$i] != $arr[$i - 1] + 1) {
                    echo "false - последовательности нет";
                    break;
                }
            }
        }
    }

    echo "true";
}

isContinuousSequence([5, 6, 7, 8, 9, 10, 11]);
