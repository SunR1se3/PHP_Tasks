<?php

declare(strict_types=1);

function getChildren(array $data) : array {
    $resultArr = [];

    foreach ($data as $item)
        if (array_key_exists("children", $item))
            if (!empty($item["children"]))
                foreach ($item["children"] as $child)
                    $resultArr[] = $child;
    return $resultArr;
}

$users = [
    ['name' => 'Tirion', 'children' => [
        ['name' => 'Mira', 'birdhday' => '1983-03-23']
    ]],
    ['name' => 'Bronn', 'children' => []],
    ['name' => 'Sam', 'children' => [
        ['name' => 'Aria', 'birdhday' => '2012-11-03'],
        ['name' => 'Keit', 'birdhday' => '1933-05-14']
    ]],
    ['name' => 'Rob', 'children' => [
        ['name' => 'Tisha', 'birdhday' => '2012-11-03']
    ]],
];

var_dump(getChildren($users));
