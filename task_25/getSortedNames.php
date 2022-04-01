<?php

declare(strict_types=1);

function getSortedNames(array $data) : array {
    $array_values = [];

    foreach ($data as $item)
        $array_values[] = $item["name"];

    sort($array_values);
    return $array_values;
}

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Aaa', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
];

var_dump(getSortedNames($users));