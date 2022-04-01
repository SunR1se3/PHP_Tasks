<?php

require_once "App/Arrays/genDiff.php";
use function App\Arrays\genDiff;

var_dump($result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
));