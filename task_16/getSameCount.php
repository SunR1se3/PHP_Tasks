<?php

declare(strict_types=1);

function getSameCount(array $firstArr, array $secondArr) : int {
    $counter = 0;

    foreach (array_count_values($firstArr) as $key => $value) {
        if (array_key_exists($key, array_count_values($secondArr))) $counter++;
    }

    return $counter;
}

echo getSameCount([], []) . "\n";
echo getSameCount([1, 10, 3], [10, 100, 35, 1]) . "\n";
echo getSameCount([1, 3, 2, 2], [3, 1, 1, 2]) . "\n";
echo getSameCount([5, 9, 2, 15], [1, 1, 4, 8, 5, 2, 2, 9, 4, 22, 15, 31]);
