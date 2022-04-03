<?php

declare(strict_types=1);

function takeOldest(array &$users, int $countReturned = 1) : array {
    function cmp($a, $b): int {
        if (strtotime($a['birthday']) == strtotime($b['birthday'])) {
            return 0;
        }
        return (strtotime($a['birthday']) < strtotime($b['birthday'])) ? -1 : 1;
    }
    usort($users, "cmp");
    return array_slice($users, 0, $countReturned);
}

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

var_dump(takeOldest($users, 10));