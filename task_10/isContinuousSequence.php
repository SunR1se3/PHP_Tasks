<?php

declare(strict_types=1);

function isContinuousSequence(array $array) : bool {
    if (count($array) == 0) return false;
    for ($i = 0, $j = $array[0]; $i < count($array); $i++, $j++)
        if ($array[$i] != $j) return false;
    return true;
}

var_dump(isContinuousSequence([10, 11, 12, 13]));
var_dump(isContinuousSequence([10, 11, 12, 14, 15]));
var_dump(isContinuousSequence([1, 2, 2, 3]));
var_dump(isContinuousSequence([]));


