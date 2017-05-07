<?php include "header.php";?>

<main>
	<section id="mainMovie">
	    <div class="container">
	    	<div class="row">
			    	<?php

			    	$title = $plot = $year = $image = $time = 
			    	$genre = $director = $actors = $language 
			    	= $production = $website = $response = $date = "";

			    	if (isset($_GET['name'])) {
			    	 	
			    		$movie = $_GET['name'];
			    		$movieForURL = urlencode($movie);
			    		$jsonString = file_get_contents ('http://www.omdbapi.com/?t='.$movieForURL.'&y=2017&plot=full' );

			    		$data = json_decode ($jsonString);

			    		$response = $data->Response;

			    		if ($response=='False') {
			    			echo "Имате грешка, опитайте друго";
			    		} else {
				    		$title = $data->Title;
				    		$plot = $data->Plot;
				    		$year = $data->Year;
				    		$image = $data->Poster;
				    		$time = $data->Runtime;
				    		$genre = $data->Genre;
				    		$director = $data->Director;
				    		$actors = $data->Actors;
				    		$language = $data->Language;
				    		$production = $data->Production;
				    		$website = $data->Website;
				    	}
			    } else {
			    	header("Location:index.php");
			    }
			    	?>

			    	<div class="col-xs-12">
				    	<div class="col-xs-12 col-md-4">
				    		<img class="img-responsive feature-image" src="<?php echo $image; ?>" title="<?php echo $title ?>" alt="<?php echo $title ?>" />

				    		<?php
				    			$date = date('WY');
				    			$text = file("db/db_movies/movie.txt");

				    			if (!empty($text)) {

					    			$movieYearArr = array();
					    			foreach ($text as $value) {
					    				if (strpos($value, $date) !==false) {
					    					$movieYearArr[] = $value;
					    				}
					    			}
				    			}

				    			if (!empty($title)) {
					    			$movieArr = array();
					    			foreach ($text as $value) {
					    				if (strpos($value, $title) !==false) {
					    					$movieArr[] = $value;
					    				}
					    			}
					    		}



				    			if (!empty($movieArr)) {
					    			foreach ($movieArr as $value) {
					    				$tmp = explode("#",$value);
					    				array_pop($tmp);
					    				foreach ($tmp as $v) {
					    					$tmp2 = explode(":",$v);

					    					if ($tmp2[0]=="link") {
					    						$movieForURL = $tmp2[1];
					    					}
					    				}
									}
				    			}
				    			?>

				    			<a href="#" style="background-color:#FFC789; border: none; " class="btn btn-default btn-lg btn-success" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/<?php echo $movieForURL; ?>">ТРЕЙЛЪР</a>
		    			            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
		    			                <div class="modal-dialog">
		    			                    <div class="modal-content">
		    			                        <div class="modal-body">
		    			                            <button style="color: #fff;" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    			                            <div>
		    			                                <iframe width="100%" height="350" src="" allowfullscreen></iframe>
		    			                            </div>
		    			                        </div>
		    			                    </div>
		    			                </div>
		    			            </div>
				    	</div>

				    	<div class="col-xs-12 col-md-8">
				    		<h1 class="featuretitle" style="color: #FFC789;"><?php echo $title; ?></h1>
				    	    <p class="reservation"><?php echo $plot; ?></p>

				    	    <table class="table table-responsive" style="color: #fff;">
				    	    	<tbody>
				    	    		<tr>
				    	    			<td style="color: #FFC789;">Година:</td>
				    	    			<td><?php echo $year; ?></td>
				    	    		</tr>
				    	    		<tr>
				    	    			<td style="color: #FFC789;">Режисьор:</td>
				    	    			<td><?php echo $director; ?></td>
				    	    		</tr>
				    	    		<tr>
				    	    			<td style="color: #FFC789;">Актьори:</td>
				    	    			<td><?php echo $actors; ?></td>
				    	    		</tr>
				    	    		<tr>
				    	    			<td style="color: #FFC789;">Жарн:</td>
				    	    			<td><?php echo $genre; ?></td>
				    	    		</tr>
				    	    		<tr>
				    	    			<td style="color: #FFC789;">Eзик:</td>
				    	    			<td><?php echo $language; ?></td>
				    	    		</tr>
				    	    		<tr>
				    	    			<td style="color: #FFC789;">Продукция:</td>
				    	    			<td><?php echo $production; ?></td>
				    	    		</tr>
				    	    		<tr>
				    	    			<td style="color: #FFC789;">Website:</td>
				    	    			<td><a style="color: #fff;" href="<?php echo $website; ?>"><?php echo $website; ?></a></td>
				    	    		</tr>
				    	    	</tbody>
				    	    </table>
				    	</div>
			    	</div>
	    	</div>
	    </div>
	</section>
	<section class="container">
		<div class="row">
		    <div class="col-xs-12 col-md-9 main">

		      <?php include "inc/tab.php"; ?>	    	

			</div><!-- col-md-9 -->

			<aside class="col-xs-12 col-md-3">
				<?php include "aside.php"; ?>
			</aside>
		</div> <!-- row -->
	</section> 
</main>


<?php include "footer.php"; ?>





