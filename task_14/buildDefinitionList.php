<?php

declare(strict_types=1);

function buildDefinitionList(array $array) : string {
    $resultStr = "";

    foreach ($array as $list) {
        $resultStr .= "<dt>" . $list[0] . "</dt>" . "<dd>" . $list[1] . "</dd>";
    }
    return "<dl>" . $resultStr . "</dl>";
}

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

echo buildDefinitionList($definitions);
