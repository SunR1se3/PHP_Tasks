<?php

declare(strict_types=1);

function union(array ...$arrays) : array {
    $resultArr = [];

    foreach ($arrays as $array) {
        foreach ($array as $item) {
            $resultArr[] = $item;
        }
    }

    return array_values(array_unique($resultArr));
}

var_dump(union([3])); // => [3]
echo "\n\n";
var_dump(union([3, 2], [2, 2, 1])); // => [3, 2, 1]
echo "\n\n";
var_dump(union(['a', 3, false], [true, false, 3], [false, 5, 8])); // => ['a', 3, false, true, 5, 8]