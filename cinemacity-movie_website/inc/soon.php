<?php
	$title = $plot = $year = $image =  $movieForURL = "";

	$date = date('WY');
	$text = file("db/db_movies/movie.txt");
	$dx = "Soon";
	$movieArr = array();
	$movieYearArr = array();
	foreach ($text as $value) {//масив от филмите от една и съща седмица
		if ((strpos($value, $date) !==false) && (strpos($value, $dx) !==false)) {
			$movieYearArr[] = $value;
		}
	} 

	foreach ($movieYearArr as $value) { // масив от заглавията
		$tmp = explode("#",$value);
		array_pop($tmp);
		foreach ($tmp as $v) {
			$tmp2 = explode(":",$v);
			if ($tmp2[0]=="title") {
				$movieArr[] = $tmp2[1];
			}
		}
	} 

	foreach ($movieArr as $movie) {
		$movieForURL = urlencode($movie);
		$jsonString = file_get_contents ('http://www.omdbapi.com/?t='.$movieForURL.'&y=2017&plot=full' );
		$data = json_decode ($jsonString);

		$title = $data->Title;
		$plot = $data->Plot;
		$year = $data->Year;
		$image = $data->Poster;
		?>

		<div class="col-xs-6 col-md-3">
			<div class="static-item-wrap">
			    <a class="thumbnail" data-toggle="modal" data-target="#myModal" onclick="location.href = 'movie.php?name=<?php echo $title ?>';">
				    <img class="img-responsive" src="<?php echo $image; ?>" title="<?php echo $title ?>" alt="<?php echo $title ?>" />
					<div class="overlay">
	                    <div class="recent-work-inner">
	                        <h3 class="tab"><?php echo $title; ?></h3>
	                    </div> 
	                </div>
			    </a>
			</div>
		</div>
		
		<?php
	}
?>