<?php
	$date = date('WY');
	$text = file("db/db_movies/movie.txt");
	$movieYearArr = array();
	foreach ($text as $value) {

		if (strpos($value, $date) !==false) {
			$movieYearArr[] = $value;
		}
		
	}

	foreach ($movieYearArr as $value) {
		$tmp = explode("#",$value);
		array_pop($tmp);
		foreach ($tmp as $v) {
			$tmp2 = explode(":",$v);

			if ($tmp2[0]=="link") {
				$movieForURL = $tmp2[1];
			}
		}
	?>
	<div embed-responsive embed-responsive-4by3>

		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $movieForURL; ?>?ecver=1" frameborder="0" allowfullscreen></iframe>"
	  
	</div>
	<?php
	}
?>