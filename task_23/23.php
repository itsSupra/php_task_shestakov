<?php

function pick($data, $key)
{
    $res = [];
    print_r($data);
    for ($i = 0; $i < count($data); $i++) {
        for ($j = 0; $i < count($key); $j++) {
            if ($data[$i] == $key[$j]) {
                $res[] = $data;
            }
        }
        print_r($res);
    }
}

pick($data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'], ['user', 'os']);