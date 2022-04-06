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

foreach (getNum_gen(2, 1, 1, 10) as $item) {
    echo $item . " ";
}