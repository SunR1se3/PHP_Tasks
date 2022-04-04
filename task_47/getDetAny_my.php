<?php

declare(strict_types=1);

function getMinor(array $matrix, int $i, int $j, int $n) : array {
    $di = 0;
    $p = [[]];

    for ($x = 0; $x < $n - 1; $x++) {
        if ($x == $i) $di = 1;
        $dj = 0;
        for ($y = 0; $y < $n - 1; $y++) {
            if ($y == $j) $dj = 1;
            $p[$x][$y] = $matrix[$x + $di][$y + $dj];
        }
    }
    return $p;
}

function getDet(array $matrix, int $n) : ?float {
    $k = 1;
    $m = $n - 1;
    $p = [[]];
    $det = 0;

    if ($n < 1) return null;

    if ($n == 2) {
        return $matrix[0][0] * $matrix[1][1] - ($matrix[1][0] * $matrix[0][1]);
    }

    if ($n > 2) {
        for ($i = 0; $i < $n; $i++) {
            $p = getMinor($matrix, $i, 0, $n);
            $det += $k * $matrix[$i][0] * getDet($p, $m);
            $k = -$k;
        }
    }

    return $det;
}

$matrix = [
    [5, 2, 9, 22],
    [4, 1, 7, 17],
    [3, 6, 8, 5],
    [3, 6, 8, 12]
];

var_dump(getDet($matrix, 4));

