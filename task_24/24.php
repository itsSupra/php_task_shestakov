<?php

declare(strict_types=1);
require_once "App/Arrays/genDiff.php";

use function App\Arrays\genDiff;

genDiff(['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]);