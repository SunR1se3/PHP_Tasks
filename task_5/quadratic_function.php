<?php

declare(strict_types=1);

function calculate(float $a, float $b, float $c) : void{
    $d = $b ** 2 - 4 * $a * $c;
    if ($d < 0) {
        echo "Нет корней!";
        return;
    }

    if ($d > 0)
        echo ($b * -1 + sqrt($d)) / (2 * $a)
            . "\n" .
            ($b * -1 - sqrt($d)) / (2 * $a);
    else {
        echo ($b * -1) / (2 * $a);
    }
}

calculate(10, 30, 20); // 10x^2 + 30x + 20 = 0
