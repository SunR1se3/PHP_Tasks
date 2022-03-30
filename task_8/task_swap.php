<?php

require_once "App/Arrays/swap.php";
use function App\Arrays\swap;

$names = ['john', 'smith', 'karl'];

$result = swap($names, 1);
print_r($result);

$result = swap($names, 2);
print_r($result);