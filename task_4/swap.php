<?php

declare(strict_types=1);

function swap(&$a, &$b): void {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 10;
$b = 5;

swap($a, $b);

print_r($a . "\n" . $b);
