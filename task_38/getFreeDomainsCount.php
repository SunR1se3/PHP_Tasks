<?php

declare(strict_types=1);

const FREE_EMAIL_DOMAINS = ["yandex.ru", "gmail.com", "hotmail.com"];

function getFreeDomainsCount(array $data) : array {
    $result = [];

    foreach ($data as $item)
        if (in_array(explode("@", $item)[1], FREE_EMAIL_DOMAINS))
            $result[] = explode("@", $item)[1];

    return array_count_values($result);
}

$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@bitrix.com',
    'keys@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];

var_dump(getFreeDomainsCount($emails));