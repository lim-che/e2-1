<?php

require __DIR__.'/vendor/autoload.php';

use RPS\Game;
use App\MyGame;
use App\Debug;

$game = new Game(); l
$myGame = new MyGame();

Debug::dump($myGame->play('heads'));