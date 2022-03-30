<?php

declare(strict_types=1);

function isPalindrome(string $str) : bool {
    return $result = strcmp($str, strrev($str)) == 0 ? true : false;
}

echo isPalindrome("msm");

