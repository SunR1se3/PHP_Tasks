<?php

declare(strict_types=1);

namespace Number;

function revers(int $num) : int {
    $strNum = (string)$num;
    $result = "";

    for ($i = 0; $i < strlen($strNum); $i++)
        $result .= $strNum[strlen($strNum) - 1 - $i];
    return $num > 0 ? (int)$result : (int)$result * -1;
}
