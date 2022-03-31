<?php

require_once "App/Arrays/bubbleSort.php";
use function App\Arrays\bubbleSort;

var_dump(bubbleSort([]));
var_dump(bubbleSort([3, 10, 4, 3, 8, 22, 15, 1, 1]));