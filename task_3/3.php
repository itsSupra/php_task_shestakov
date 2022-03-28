<?php
function reverse(int $num)
{

    $input = str_split($num);

    $reverse= [];

    for ($i = sizeof($input) - 1; $i >= 0; $i--) {
        if ($input[0] == "-") {
            $reverse[0] = "-";
        }
        $reverse[] = $input[$i];
    }

    return (int)$return = implode("", $reverse);
}

echo reverse(-256);