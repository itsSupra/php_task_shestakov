<?php

function make()
{
    return [];
}

function set(&$map, $key, $value)
{
    $hashKey = crc32($key) % 1000;
    if (array_key_exists($hashKey, $map)) {
        return false;
    } else {
        $map[$hashKey] = $value;
        return true;
    }
}

function get($map, $key, $default = null)
{
    $hashKey = crc32($key) % 1000;
    if (array_key_exists($hashKey, $map)) {
        return $map[$hashKey];
    } else {
        return $default;
    }
}
