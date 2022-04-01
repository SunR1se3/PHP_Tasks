<?php

declare(strict_types=1);

namespace App\Arrays;

function genDiff(array $firstArr, array $secondArr) : array {
    $result = [];

    foreach ($firstArr as $fkey => $fvalue) {
        foreach ($secondArr as $skey => $svalue) {
            if (!array_key_exists($skey, $firstArr) && array_key_exists($skey, $secondArr))
                $result[$skey] = "added";

            if (array_key_exists($fkey, $firstArr) && !array_key_exists($fkey, $secondArr))
                $result[$fkey] = "deleted";

            if (array_key_exists($fkey, $firstArr) && array_key_exists($fkey, $secondArr))
                if (strcmp((string)$fvalue, (string)$svalue) !== 0)
                    $result[$fkey] = "changed";

            if (array_key_exists($fkey, $firstArr) && array_key_exists($fkey, $secondArr))
                if (strcmp((string)$fvalue, (string)$svalue) === 0)
                    $result[$fkey] = "unchanged";
        }
    }

    return $result;
}