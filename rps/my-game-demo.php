<?php

require __DIR__.'/vendor/autoload.php';

use App\MyGame;
use App\Debug;

$myGame = new MyGame();

Debug::dump($myGame->play('heads'));
