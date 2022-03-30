<?php

declare(strict_types=1);

function isPalindrome(string $str) {
    $result = false;
    for ($i = 0; $i < strlen($str); $i++)
        $result = $str[$i] == $str[strlen($str) - 1 - $i] ? true : false;
    return $result;
}

echo isPalindrome("fsf");

