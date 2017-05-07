<?php 


	$text = file("../db/db_blog/blogtext.txt");
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

		echo "<tr><td>" .$title."</td><td> <img src='../db/db_blog/uploded/$image'/> </td></tr>";
	}

?>