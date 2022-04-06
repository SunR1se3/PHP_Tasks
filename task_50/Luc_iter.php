<?php

declare(strict_types=1);

function getNum_iter(int $a, int $b, int $t, int $n) : void {
    for ($i = $t; $i <= $n; $i++) {
        echo $a . " ";
        $temp = $b;
        $b += $a;
        $a = $temp;
    }
}

getNum_iter(2, 1, 1, 10);