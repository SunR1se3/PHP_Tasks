<?php

declare(strict_types=1);

function wordsCount(string $str) : array {
    $new_array = array_diff(explode(' ', trim($str)), array(''));
    return array_count_values($new_array);
}

var_dump(wordsCount('')); // []
echo "\n";
var_dump(wordsCount('  one two one')); // ['one' => 2, 'two' => 1]
echo "\n";
var_dump(wordsCount('  one      two       one     ')); // ['one' => 2, 'two' => 1]
