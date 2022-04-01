<?php

declare(strict_types=1);

function sayPrimeOrNot(int $num) : string {
    for ($i = 2; $i < $num; $i++)
        if ($num % $i == 0) return 'no';
    return 'yes';
}

echo sayPrimeOrNot(131) . "\n"; // => yes
echo sayPrimeOrNot(4); // => no