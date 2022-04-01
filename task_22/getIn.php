<?php

declare(strict_types=1);

function getIn(array $data, array $request) {
    $req = array_shift($request);
    if (array_key_exists($req, $data)) {
        if (!is_array($data[$req]) && empty($request)) return  $data[$req];
        if (empty($request)) return $data[$req];
        return !is_array($data[$req]) ? null : getIn($data[$req], $request);
    }
    return null;
}

$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ],
    'test' => [
        'temp' => [
            '5' => 'Hello, World!'
        ]
    ]
];

echo "1\n";
var_dump(getIn($data, ['undefined']));        // => null
echo "\n\n2\n";
var_dump(getIn($data, ['user']));             // => 'ubuntu'
echo "\n\n3\n";
var_dump(getIn($data, ['user', 'ubuntu']));   // => null
echo "\n\n4\n";
var_dump(getIn($data, ['hosts', 1, 'name'])); // => 'web2'
echo "\n\n5\n";
var_dump(getIn($data, ['hosts', 0]));         // => ['name' => 'web1']
echo "\n\n6\n";
var_dump(getIn($data, ['test', 'temp', '5']));         // => 'Hello, World!'


