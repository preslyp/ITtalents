<?php 

	$text = file("../db/db_movies/movie.txt");

	foreach ($text as $value) {
		$tmp = explode("#",$value);
		array_pop($tmp);
		foreach ($tmp as $v) {
			$tmp2 = explode(":",$v);

			if ($tmp2[0]=="mountyear") {
				$number = $tmp2[1];
			}

			if ($tmp2[0]=="type") {
				$typeMovie = $tmp2[1];
			}
			
			if ($tmp2[0]=="title") {
				$title = $tmp2[1];
			}
		}

		echo "<tr><td>" .$number."</td><td>" .$title."</td><td>" .$typeMovie."</td></tr>";
	}

 ?>