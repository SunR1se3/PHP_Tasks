<?php

declare(strict_types=1);

function pick (array $data, array $request) : array {
    $result = [];

    if (empty($request)) return  [];

    foreach ($request as $req) {
        if (array_key_exists($req, $data))
            $result[$req] = $data[$req];
    }

    return $result;
}

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'
];

var_dump(pick($data, ['user']));       // → ['user' => 'ubuntu']
echo "\n\n";
var_dump(pick($data, ['user', 'os'])); // → ['user' => 'ubuntu', 'os' => 'linux']
echo "\n\n";
var_dump(pick($data, []));             // → []
echo "\n\n";
var_dump(pick($data, ['none']));       // → []