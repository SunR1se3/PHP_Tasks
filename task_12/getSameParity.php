<?php

declare(strict_types=1);

function getSameParity(array $array) : array {
    $newArray = [];
    $flag = $array[0] % 2 == 0;

    foreach ($array as $item) {
        if ($flag) {
            if ($item % 2 == 0) $newArray[] = $item;
        }
        elseif ($item % 2 != 0) $newArray[] = $item;
    }
    return $newArray;
}

var_dump(getSameParity([]));
var_dump(getSameParity([1, 2, 3]));
var_dump(getSameParity([1, 2, 8]));
var_dump(getSameParity([2, 2, 8]));
var_dump(getSameParity([5, 9, 2]));
