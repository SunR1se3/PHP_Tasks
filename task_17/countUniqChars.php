<?php

declare(strict_types=1);

function countUniqChars(string $str) : int {
    $strArr = str_split($str);
    $counter = 0;
    if (empty($str)) return 0;
    foreach (array_count_values($strArr) as $key => $value) {
        $counter++;
    }

    return $counter;
}

$text1 = 'yyyyyaaaabbbbssqq';
echo countUniqChars($text1) . "\n";

$text2 = 'You know nothing Jon Snow';
echo countUniqChars($text2) . "\n";

$text3 = '';
echo countUniqChars($text3);
