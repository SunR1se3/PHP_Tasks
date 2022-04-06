<?php

declare(strict_types=1);

function getNum_rec(int $a, int $b, int $t, int $n) : void {
    echo $a . " ";

    if ($t < $n) getNum_rec($b, $a + $b, $t + 1, $n);
}

getNum_rec(2, 1, 1, 10);