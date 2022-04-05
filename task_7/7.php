<?php

declare(strict_types=1);
require_once "App/Arrays/AddPrefix.php";

use function App\Arrays\AddPrefix;

print_r(addPrefix(['john', 'smith', 'karl'], 'Mr'));
