<?php

declare(strict_types=1);

namespace App\Arrays;

function get(array $array, int $index, string $defaultValue = "null") : string {
    return array_key_exists($index, $array) ? $array[$index] : $defaultValue;
}