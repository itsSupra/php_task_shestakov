<?php

declare(strict_types=1);
require_once "App/Arrays/swap.php";

use function App\Arrays\swap;

print_r(swap(['john', 'smith', 'karl'], 1));
