<?php

echo "Let's play a game!\n";
echo "Higher number wins.\n";

$end_game = false;

while ($end_game != true) {
	echo "Pick a number between 0 and 9\n";
	$my_number = rand(0,9);
	$your_number = rtrim(fgets(STDIN));

		if (is_numeric($your_number) != true ) {
			echo "Invalid entry. You must enter a number. Your number must be a number between 0 and 9\n";
	}	elseif ($your_number > 9 || $your_number < 0) {
			echo "Invalid number $your_number. Your number must be between 0 and 9\n";
	}	elseif ($my_number == $your_number) {
			echo "It's a tie! Play again?\n";
	}	elseif ($my_number < $your_number) {
			echo "You cheated! Play again.\n";
	}	elseif ($my_number > $your_number) {
			exit("I won! Bye now.\n");
	}
}

?>
