<?php

declare(strict_types=1);

function checkIfBalanced(string $str) : bool {
    if (array_count_values(str_split($str))['('] == array_count_values(str_split($str))[')'])
        return true;
    return false;
}

var_dump(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'));
var_dump(checkIfBalanced('(4 + 3))'));
var_dump(checkIfBalanced('(4 + 10) * (2+5)'));
