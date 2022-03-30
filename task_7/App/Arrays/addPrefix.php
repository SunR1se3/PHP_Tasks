<?php

declare(strict_types=1);

namespace App\Arrays;

function addPrefix(array $array, string $prefix) : array {
    $newArray = $array;
    for ($i = 0; $i < count($array); $i++)
        $array[$i] = $prefix . " " . $array[$i];
    return $array;
}

