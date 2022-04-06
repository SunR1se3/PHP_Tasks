<?php

declare(strict_types=1);

function getNum_gen(int $a, int $b, int $t, int $n) {
    for ($i = $t; $i <= $n; $i++) {
        yield $a;
        $temp = $b;
        $b += $a;
        $a = $temp;
    }
}

// Среднее арифметическое чисел Люка
function getAverage(array $numsLuc) : float {
    return array_sum($numsLuc) / count($numsLuc);
}

// Среднее геометрическое
function getGeometrySum(array $numsLuc) : float {
    return array_product($numsLuc) ** (1 / count($numsLuc));
}

// Среднее гармоническое
function getHarmonicSum(array $numsLuc) : float {
    $reversLuc = [];
    foreach ($numsLuc as $item) {
        $reversLuc[] = $item ** -1;
    }

    return count($numsLuc) / array_sum($reversLuc);
}

function getMediana(array $numsLuc) : float {
    sort($numsLuc);

    if (count($numsLuc) % 2 === 1)
        return $numsLuc[count($numsLuc) / 2];
    return 0.5 * ($numsLuc[count($numsLuc) / 2 - 1] + $numsLuc[count($numsLuc) / 2]);

}

function getMode(array $numsLuc) : array {
    $result = [];

    foreach (array_count_values($numsLuc) as $key => $value)
           if ($value > 1) $result[] = $key;

    return $result;
}

function getStandardDeviation(array $numsLuc) : float {
    $temp = [];

    foreach ($numsLuc as $item)
        $temp[] = ($item - getAverage($numsLuc)) ** 2;

    $disp = array_sum($temp) / count($temp);

    return $disp ** 0.5;
}

$arrayLuc = [];
foreach (getNum_gen(2, 1, 1, 10) as $item) {
    $arrayLuc[] = $item;
}
var_dump($arrayLuc);
echo "\nСреднее арифметическое:";
var_dump(getAverage($arrayLuc));
echo "\nСреднее геометрическое:";
var_dump(getGeometrySum($arrayLuc));
echo "\nСреднее гармоническое:";
var_dump(getHarmonicSum($arrayLuc));
echo "\nМедиана:";
var_dump(getMediana($arrayLuc));
echo "\nМода:";
var_dump(getMode([47, 46, 50, 47, 52, 49, 45, 43, 53, 47, 52]));
echo "\nСреднеквадратическое отклонение:";
var_dump(getStandardDeviation($arrayLuc));