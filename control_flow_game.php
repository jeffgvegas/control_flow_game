<?php

echo "Let's play a game!\n";
echo "Higher number wins.\n";

$end_game = false;

while ($end_game != true) {
	echo "Pick a number between 0 and 9\n";
	$my_number = rand(0,9);
	$your_number = rtrim(fgets(STDIN));
}

?>
