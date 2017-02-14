<?php 

	$number = $_GET['number'];
	$number+=0;

	$stars = 1;
	$spaces = $number-1;


	if (isset($number) && is_numeric($number)) {

		for ($rows=1; $rows <= $number ; $rows++) { 
				
				for ($i=1; $i <= $spaces ; $i++) { 
					echo "&nbsp; ";
				}

				for ($j=1; $j <= $stars ; $j++) { 
					echo "*";
				}

				echo "<br/>";
				$stars+=2;
				$spaces--;

		}
	
	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}		

?>