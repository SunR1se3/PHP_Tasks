<?php

declare(strict_types=1);

$matrix = [
    [5, 2, 9],
    [4, 1, 7],
    [3, 6, 8]
];

$det = $matrix[0][0]* $matrix[1][1]* $matrix[2][2] + $matrix[0][1]* $matrix[1][2]* $matrix[2][0]
    + $matrix[1][0]* $matrix[2][1]* $matrix[0][2] - $matrix[2][0]* $matrix[1][1]* $matrix[0][2] -
    $matrix[2][1]* $matrix[1][2]* $matrix[0][0] - $matrix[1][0]* $matrix[0][1]* $matrix[2][2];

var_dump($det);