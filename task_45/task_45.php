<?php

declare(strict_types=1);

function dump(string $file, $struct) : void {
    file_put_contents("./" . $file, serialize($struct));
}

function load(string $file) {
    return unserialize(file_get_contents($file));
}

$f = "tmp.txt";
$structure = "fdsfdsfds";

dump($f, $structure);
$data = load($f);

var_dump($data == $structure);