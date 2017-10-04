#!/usr/bin/php
<?php
while (true){
	echo "Enter a number: ";
	if ( $input = fgets(STDIN) ){
		$input = rtrim($input);
		if ( is_numeric($input) == 1 ){
			if ( $input % 2 == 0){
				echo "The number $input is even";
			} else{
				echo "The number $input is odd";
			}
		} else {
			echo "$input is not a number";
		}
		echo "\n";
	} else {
		return (false);
	}
}
?>
