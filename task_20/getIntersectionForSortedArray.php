<?php

declare(strict_types=1);

//штат
function phpFunc_getIntersectionForSortedArray(array $firstArr, array $secondArr) : array {
    return array_intersect($firstArr, $secondArr);
}

//своя реализация
function getIntersectionForSortedArray(array $firstArr, array $secondArr) : array {
    if (empty($firstArr) || empty($secondArr)) return [];

    $resultArr = [];

    for ($i = 0; $i < count($firstArr); $i++) {
        for ($j = 0; $j < count($secondArr); $j++) {
            if ($firstArr[$i] == $secondArr[$j]) $resultArr[] = $firstArr[$i];
        }
    }

    return $resultArr;
}

// С использованием штатных функций
var_dump(phpFunc_getIntersectionForSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]));
var_dump(phpFunc_getIntersectionForSortedArray([10, 11, 24], []));

echo "\n\n\n";

// С использованием своей реализации
var_dump(getIntersectionForSortedArray([10, 13, 14, 18, 24, 30], [10, 11, 24]));
var_dump(getIntersectionForSortedArray([10, 11, 24], []));