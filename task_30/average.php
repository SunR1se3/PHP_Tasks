<?php

declare(strict_types=1);

function average(float ...$nums) : ?float {
    if (empty($nums)) return null;

    $result = 0;
    $counter = 0;

    foreach ($nums as $num) {
        $result += $num;
        $counter++;
    }

    return $result / $counter;
}

var_dump(average(0)); // => 0
var_dump(average(0, 10)); // => 5
var_dump(average(-3, 4, 2, 10)); // => 3.25
var_dump(average()); // => null
