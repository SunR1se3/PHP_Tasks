<?php

declare(strict_types=1);

function wordsCount(string $pathToFile) : array {
    $content = file_get_contents($pathToFile, true);
    $new_array = array_diff(explode(' ', trim($content)), array(''));
    return array_count_values($new_array);
}

var_dump(wordsCount('Том 1 и 2.txt'));
echo "\n";
var_dump(wordsCount('Том 3 и 4.txt'));

