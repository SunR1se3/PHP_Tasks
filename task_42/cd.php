<?php

declare(strict_types=1);

function cd(string $currentPath, string $destPath) : string {
    $destArr = explode('/', $destPath);
    $currentArr = explode('/', $currentPath);
    $resultArr = [];
    $lvl = 2;

    //var_dump($destArr);
    if (strcmp($destArr[0], "/") == 0) return $destPath;

    foreach ($destArr as $item) {
        if (strcmp($item, "..") == 0)
            $resultArr[] = $currentArr[count($currentArr)-$lvl++];
        if (strcmp($item, ".") == 0)
            $resultArr[] = $currentArr[count($currentArr)-$lvl];
        if (strcmp($item, "..") != 0 && strcmp($item, ".") != 0)
            $resultArr[] = $item;
    }

    $resultStr = "";

    foreach (array_diff($resultArr, array('')) as $item)
        $resultStr .= "/" . $item;

    return $resultStr;
}

var_dump(cd('/current/path', '/etc')); // /etc
var_dump(cd('/current/path', '.././anotherpath')); // /current/anotherpath

