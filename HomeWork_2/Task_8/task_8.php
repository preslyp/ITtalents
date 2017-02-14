<?php

	$number = $_GET['number'];
	$number+=0;

	$digits = $number - 1;

		
	if (!empty($number) && is_numeric($number)) {

		echo "<table border= \"1\" style = 'border-collapse: collapse'";

			echo "<tr>";
				echo "<td>";
					echo "Въведете N: </br> $number";
				echo "</td>";
			echo "</tr>";

			for($rows = 0; $rows < $number; $rows++) {

				echo "<tr>";
					echo "<td>";
						for($col = 0; $col < $number; $col++) {						
							echo $digits;
						}
					echo "</td>";
				echo "</tr>";

				$digits += 2;
				echo '<br/>';
			}

		echo "</table>";
		
	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}	
?>
