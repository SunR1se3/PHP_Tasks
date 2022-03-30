<?php

declare(strict_types=1);

function findIndex(array $array, float $temperatura) : int {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $temperatura) return $i;
    }
    return -1;
}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];

echo findIndex($temperatures, 34) . "\n";
echo findIndex($temperatures, 37.5) . "\n";
echo findIndex($temperatures, 3) . "\n";
