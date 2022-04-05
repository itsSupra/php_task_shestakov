<?php

function getIn($arr, $key)
{
    foreach ($key as $value) {
        if (array_key_exists($value, $arr)) {
            $arr = $arr[$value];
        }
    }
    echo $arr;
}

getIn([
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]], ['hosts', 1, 'name']);