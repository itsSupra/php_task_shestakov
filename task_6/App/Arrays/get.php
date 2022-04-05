<?php

namespace App\Arrays;
function get($cities, $i, $name)
{
    if ($i < count($cities)) {
        for ($i; $i < count($cities); $i++) {
            echo $cities[$i];
            break;
        }
    } else {
        if ($i >= count($cities)) {
            $cities[$i] = $name;
            echo $name;
            if (empty($name))
                return null;
        }
    }
}