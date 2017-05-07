<?php 

	$text = file("../db/db_reservation/reservation.txt");
	$name = $cinema = $movie = $type = $date = $hour = "";

	foreach ($text as $value) {
		$tmp = explode("#",$value);
		array_pop($tmp);
		foreach ($tmp as $v) {
			$tmp2 = explode(":",$v);

			if ($tmp2[0]=="name") {
				$name = $tmp2[1];
			}

			if ($tmp2[0]=="cinema") {
				$cinema = $tmp2[1];
			}
			
			if ($tmp2[0]=="movie") {
				$movie = $tmp2[1];
			}

			if ($tmp2[0]=="type") {
				$type = $tmp2[1];
			}

			if ($tmp2[0]=="date") {
				$date = $tmp2[1];
			}

			if ($tmp2[0]=="hour") {
				$hour = $tmp2[1];
			}
		}

		echo "<tr><td>" .$name."</td><td>" .$cinema."</td><td>" .$movie."</td><td>" .$type."</td><td>" .$date."</td><td>" .$hour."</td></tr>";
	}

?>