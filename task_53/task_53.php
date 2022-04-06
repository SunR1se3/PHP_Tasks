<?php

declare(strict_types=1);
ini_set('memory_limit', '512M');
const ETHNIC = ["European", "Maori", "Pacific Peoples", "Asian", "Middle Eastern/Latin American/African", "New Zealander"];
const AGES = [20, 40];

function getEthnicFromCSV(string $path)  : array {
    $result = [];

    if (($handle = fopen($path, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (in_array($data[1], ETHNIC, true))
                $result[] = $data[0];
        }
    }
    return $result;
}

function getAgesFromCSV(string $path) : array {
    $result = [];

    if (($handle = fopen($path, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (strpos($data[1], "-") !== false) {
                $fr = (int)substr($data[1], 0, 2);
                $sc = (int)substr($data[1], 3, 2);
                if ($fr >= AGES[0] && $sc <= AGES[1])
                    $result[] = $data[0];
            } elseif ((int)substr($data[1], 0, 2)
                >= AGES[0] && (int)substr($data[1], 0, 2) <= AGES[1]) $result[] = $data[0];
        }
    }
    return $result;
}

function getRegionCodeFromCSV(string $path, array $ethnic, array $ages) : array {
    $result = [];

    if (($handle = fopen($path, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (in_array($data[1], $ages, true) && in_array($data[2], $ethnic, true))
                $result[] = $data[4];
        }
    }
    return $result;
}

function getRegionName(string $path, $regionCodes) : array {
    $result = [];

    if (($handle = fopen($path, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (in_array($data[0], $regionCodes, true)) $result[$data[0]] = $data[1];
        }
    }
    return $result;
}

function makeCsvResult(string $path, array $ethnic, array $ages, array $codeRegion, array $regionNames) : void {
    $f = fopen("result.csv", "w");
    $result = [];
    if (($handle = fopen($path, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

            if (in_array($data[1], $ages, true)
                && in_array($data[2], $ethnic, true)
                && in_array($data[4], $codeRegion, true)) {
                $result[0] = $data[3] == 1 ? "Male," : "Female,";
                $result[1] = $data[5] . ",";
                $result[2] = $regionNames[$data[4]];
                fputcsv($f, $result);
            }
        }
    }
}



$codesOfEthnic = getEthnicFromCSV("F:\data_php_task\DimenLookupEthnic8277.csv");
$codesOfAges = getAgesFromCSV("F:\data_php_task\DimenLookupAge8277.csv");
$codesOfRegion = getRegionCodeFromCSV("F:\data_php_task\Data8277.csv", $codesOfEthnic, $codesOfAges);
$regionNames = getRegionName("F:\data_php_task\DimenLookupArea8277.csv", $codesOfRegion);
makeCsvResult("F:\data_php_task\Data8277.csv", $codesOfEthnic, $codesOfAges, $codesOfRegion, $regionNames);
