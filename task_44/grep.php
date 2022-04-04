<?php

declare(strict_types=1);

function grep(string $subStr, string $template) : array {
    $files = glob($template);
    $result = [];

    foreach ($files as $file) {
        foreach (explode("\n", file_get_contents($file)) as $str) {
            if (!empty($str)) {
                if (str_contains($str, $subStr))
                    $result[] = str_replace("\r", '', $str);
            }
        }
    }

    return $result;
}

var_dump(sizeof(grep('test', './*')));