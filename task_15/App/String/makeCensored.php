<?php

declare(strict_types=1);

namespace App\String;

function makeCensored(string $str, array $rules) {
    $strArr = explode(' ', $str);

    foreach ($rules as $rule) {
        if (in_array($rule, $strArr)) {
            $contRepetedWords = array_count_values($strArr)[$rule];
            for ($i = 0; $i < $contRepetedWords; $i++)
                $strArr[array_search($rule, $strArr)] = "$#%!";
        }
    }

    return implode(" ", $strArr);
}