<?php 

	$number = $_GET['number'];
	$number+=0;

	$string = $_GET['text'];

	if (isset($number) && isset($string) && is_numeric($number) && is_string($string) && ($number>= 3 && $number <= 20)) {
	
		for ($rows=1; $rows <= $number ; $rows++) {


			if ($rows === 1 || $rows === $number) {
				
				for ($stars=0; $stars <$number; $stars++) { 
					echo "*";
				}
				
			}
			else {
				echo "*";
				for ($sign=0; $sign < $number-2; $sign++) { 
					echo $string;
				}
				echo "*";
			}
			echo '<br/>';


		}
	} else {
		echo "<h4>Моля, попълнете полето / Въведете правилните данни.</h4>";
	}

?>