<?php

declare(strict_types=1);

function getComposerFileData(string $pathToJson) : array {
    return json_decode(file_get_contents($pathToJson), true, 512, JSON_THROW_ON_ERROR);
}

var_dump(getComposerFileData("composer.json"));