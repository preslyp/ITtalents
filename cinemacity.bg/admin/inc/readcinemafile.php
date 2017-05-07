<?php 
	$text = file("../db/db_cinema/cinema.txt");
	$title = $image = $number = "";
	foreach ($text as $value) {
		$tmp = explode("#",$value);
		array_pop($tmp);
		foreach ($tmp as $v) {
			$tmp2 = explode(":",$v);

			if ($tmp2[0]=="number") {
				$number = $tmp2[1];
			}

			if ($tmp2[0]=="image") {
				$image = $tmp2[1];
			}
			
			if ($tmp2[0]=="title") {
				$title = $tmp2[1];
			}
		}

		echo "<tr><td>" .$title."</td><td class=\"text-center\"><img src='../db/db_cinema/uploded/$image'/> </td></tr>";
	}

?>