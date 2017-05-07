<?php
	
	$number = $cinema = $typeMovie = $hours = "";
	$date = date('WY');
	$text = file("../db/db_program/program.txt");

	$programWeekArr = array();
	foreach ($text as $value) {

		if (strpos($value, $date) !==false) {
			$programWeekArr[] = $value;
		}
		
	}

	
	foreach ($programWeekArr as $value) {
		$tmp = explode("#",$value);
		array_pop($tmp);
		foreach ($tmp as $v) {
			$tmp2 = explode(":",$v);

			if ($tmp2[0]=="cinema") {
				$cinema = $tmp2[1];
			}

			if ($tmp2[0]=="title") {
				$title = $tmp2[1];
			}
			
			if ($tmp2[0]=="type") {
				$type = $tmp2[1];
			}

			if ($tmp2[0]=="hours") {
				$hours = $tmp2[1];
			}

		}

		echo "<tr><td>" .$cinema."</td><td>" .$title."</td><td>" .$type."</td><td>" .$hours."</td></tr>";
	}

 ?>