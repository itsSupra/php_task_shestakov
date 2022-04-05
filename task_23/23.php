<?php

function pick($arr, $key)
{
    $arr1 = [];
    foreach ($arr as $value => $v) {
        if (in_array($value, $key)) {
            $arr1[$value] = $v;
        }
    }
    print_r($arr1);
}

pick($arr = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'], ['user', 'os']);