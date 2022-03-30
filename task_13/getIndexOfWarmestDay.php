<?php

declare(strict_types=1);

function getIndexOfWarmestDay(array $array) : ?int {
    $tmp = [];

    if (empty($array)) return null;

    foreach ($array as $item) {
        $tmp[] = max($item);
    }
    return array_search(max($tmp), $tmp);
}

$data = [
    [-5, 7, 1],
    [3, 2, 1],
    [-1, -1, 10],
];

echo getIndexOfWarmestDay($data);