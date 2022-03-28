<?php

function addPrefix($names, $prefix)
{
    foreach ($names as $item) {
        echo $prefix . PHP_EOL . $item . PHP_EOL;
    }
}

addPrefix(['john', 'smith', 'karl'], 'Mr');
