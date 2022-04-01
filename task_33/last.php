<?php

declare(strict_types=1);

$last = function (string $str) : ?string {
    return empty($str)? null : substr($str, -1);
};

var_dump($last('')); // => null
var_dump($last('pow')); // => w
var_dump($last('kids')); // => s
