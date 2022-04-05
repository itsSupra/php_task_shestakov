<?php

function getSortedNames($arr)
{
    $res = array_column($arr, 'name');
    sort($res);
    $res = implode(' ', $res);
    echo $res;
}

getSortedNames([
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon', 'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
]);