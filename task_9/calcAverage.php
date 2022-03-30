<?php

declare(strict_types=1);

function calculateAverage(array $array) : float {
    return array_sum($array) / count($array);
}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

echo calculateAverage($temperatures);