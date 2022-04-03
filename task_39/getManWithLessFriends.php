<?php

declare(strict_types=1);

function getManWithLessFriends(array $data) : ?array {
    $aloneUser = [];
    $minFriends = count($data[0]["friends"]);

    foreach ($data as $item)
        if (count($item["friends"]) <= $minFriends) {
            $minFriends = count($item["friends"]);
            $aloneUser[0] = $item;
        }

    return empty($aloneUser)? null : $aloneUser;
}

$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Keit', 'friends' => []],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]]
];

var_dump(getManWithLessFriends($users));