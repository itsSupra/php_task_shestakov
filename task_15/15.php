<?php

declare(strict_types=1);
require_once "App/Strings/makeCensored.php";

use function App\Strings\makeCensored;


makeCensored('chicken chicken? chicken! chicken', ['?', 'chicken']);