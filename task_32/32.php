<?php

function slugify($text)
{
    $lower = strtolower($text);
    $array = explode(" ", $lower);
    return implode("-", $array);
}
