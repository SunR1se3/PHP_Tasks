<?php

require_once "App/String/makeCensored.php";

use function App\String\makeCensored;

$sentence_1 = 'When you play the game of thrones, you win or you die';
echo makeCensored($sentence_1, ['die', 'play']) . "\n";

$sentence_2 = 'chicken chicken? chicken! chicken chicken chicken';
echo makeCensored($sentence_2, ['?', 'chicken']);