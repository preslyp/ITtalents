<?php 

	$firstNumber = 1;
	while ( $firstNumber <= 9) {

		$secondNumber = 1;
		while ($secondNumber <= 9) {

			if ($firstNumber > $secondNumber ) {
				
				echo " ";

			} else {

				echo "$firstNumber * $secondNumber ";

			}
			$secondNumber++;
		}
		
		echo '<br/>';
		$firstNumber++;
	}


?>