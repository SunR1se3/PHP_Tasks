<?php

declare(strict_types=1);

function without(array $array, int ...$deletedValues) : array {
    $arr = array_flip(array_unique($array));

    foreach ($deletedValues as $value)
        unset($arr[$value]);

    return array_flip($arr);
}

var_dump(without([3, 4, 10, 4, 'true'], 4)); // => [3, 10, 'true']
echo "\n\n";
var_dump(without(['3', 2], 0, 5, 11)); // => ['3', 2]
echo "\n\n";
var_dump(without([3, 3, 3, 4, 10, 4, 'true'], 4)); // => [3, 10, 'true']
