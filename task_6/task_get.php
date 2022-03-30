<?php

require_once "App/Arrays/get.php";

use function App\Arrays\get;

$cities = ['moscow', 'london', 'berlin', 'porto'];

echo get($cities, 1) . "\n";
echo get($cities, 4) . "\n";
echo get($cities, 10, 'paris'); // => paris
