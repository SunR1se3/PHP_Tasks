<?php

declare(strict_types=1);

function slugify(string $str) : string {
    $lowerStr = strtolower(trim($str));
    $strArr = explode(" ", $lowerStr);
    $resultStr = "";

    foreach (array_diff($strArr, array('')) as $item)
        $resultStr .= $item . "-";
    return substr($resultStr, 0, -1);
}

echo slugify('') . "\n"; // ''
echo slugify('test') . "\n"; // 'test'
echo slugify('test me') . "\n"; // 'test-me'
echo slugify('La La la LA') . "\n"; // 'la-la-la-la'
echo slugify('O la      lu') . "\n"; // 'o-la-lu'
echo slugify(' yOu   ') . "\n"; // 'you'
