<?php

declare(strict_types=1);

namespace App\Arrays;

function bubbleSort(array $array) : array{
    for ($i = 1; $i < count($array); $i++) {
        for ($j = 0; $j < count($array) - 1; $j++){
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}