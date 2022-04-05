<?php

function wordsCount($str)
{
    if (empty($str)) {
        return 0;
    }
    $arr = explode(' ', $str);
    $resarr = array_count_values($arr);
    asort($resarr);
    print_r($resarr);
}

echo wordsCount('one two one');