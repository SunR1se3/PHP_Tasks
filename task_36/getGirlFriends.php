<?php

declare(strict_types=1);

function getGirlFriends(array $data) : array {
    $resultArr = [];

    foreach ($data as $item)
        if (array_key_exists("friends", $item))
            if (!empty($item["friends"]))
                foreach ($item["friends"] as $friend)
                    if (strcmp($friend["gender"], "female") == 0)
                        $resultArr[] = $friend;
    return $resultArr;
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
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

var_dump(getGirlFriends($users));