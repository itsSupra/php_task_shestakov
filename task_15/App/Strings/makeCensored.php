<?php

namespace App\Strings;
function makeCensored($text, $cens)
{
    $res = [];
    $arr = explode(' ', $text);
    for ($i = 0; $i < count($arr); $i++) {
        if (in_array($arr[$i], $cens)) {
            $arr[$i] = '$#%!';
            $res = $arr[$i];
        } else $res = $arr[$i];
        echo $res . PHP_EOL;
    }
}
