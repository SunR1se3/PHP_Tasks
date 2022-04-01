<?php

declare(strict_types=1);

function sayPrimeOrNot(int $num) : void {
    for ($i = 2; $i < $num; $i++)
        if ($num % $i == 0){ printResult(false); return; }
    printResult(true);
}

function printResult(bool $prime) : void {
    echo $prime? "yes\n" : "no\n";
}

sayPrimeOrNot(8);
sayPrimeOrNot(131);