<?php

function swap($names, $i)
{
    for ($i; $i < count($names); $i) {
        if (array_key_exists($i + 1, $names)) {
            $var1 = $names[$i - 1];
            $var2 = $names[$i + 1];
            $names[$i - 1] = $var2;
            $names[$i + 1] = $var1;
            print_r($names);
            break;
        } else
            print_r($names);
        echo 'Индекс не существует!';
        break;
    }
    echo 'Неверный индекс ';
    print_r($names);
}

swap(['john', 'smith', 'karl'], 4);
