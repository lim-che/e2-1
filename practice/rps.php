<?php

# Solving RPS using a math formula
# Original source: https://therenegadecoder.com/code/rock-paper-scissors-using-modular-arithmetic/

$moves = ['rock', 'paper', 'scissors'];

$playerA = rand(0, 2);
$playerB = rand(0, 2);

if ($playerA == $playerB) {
    $winner = 'Tie';
} elseif (($playerA + 1) % 3 == $playerB) {
    $winner = 'Player B';
} else {
    $winner = 'Player A';
}

?>

<ul>
    <li>Player A: <?php echo $moves[$playerA] ?>
    <li>Player B: <?php echo $moves[$playerB] ?>
    <li>Winner: <?php echo $winner ?>
</ul>