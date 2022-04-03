<?php

declare(strict_types=1);

function getDifference(array $firstArr, array $secondArr) : array {
    $result = [];

    foreach ($firstArr as $fitem)
        if (!in_array($fitem, $secondArr)) $result[] = $fitem;

    return $result;
}

var_dump(getDifference([2, 1, 2, 3, 5], [2, 3]));