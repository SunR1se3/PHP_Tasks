<?php

declare(strict_types=1);

namespace App\Arrays;

function swap(array $array, int $index) : array {
    if ($index == 0 || $index == count($array) - 1) return $array;
    $temp = $array[$index - 1];
    $array[$index - 1] = $array[$index + 1];
    $array[$index + 1] = $temp;
    return $array;
}

$names = ['john', 'smith', 'karl'];

$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']
