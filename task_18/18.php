<?php

declare(strict_types=1);
require_once "App/Arrays/bubbleSort.php";

use function App\Arrays\bubbleSort;

$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Исходный массив:\n";
echo implode(', ', $test_array);
echo "\nОтсортированный массив:\n:";
echo implode(', ', bubbleSort($test_array)) . PHP_EOL;