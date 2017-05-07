<?php $pageTitle="IMAX"; ?>
<?php include "header.php";?>

<main>
	<section id="main-slider">
	    <div class="container">
	    	<div class="row">
		    	<ul class="videoslider">
		    	<?php
		    		$date = date('WY');
		    		$text = file("db/db_movies/movie.txt");
		    		$movieYearArr = array();
		    		foreach ($text as $value) {
		    			if (strpos($value, $date) !==false) {
		    				$movieYearArr[] = $value;
		    			}
		    		}

		    		$movieArr = array();
		    		foreach ($text as $value) {
		    			if (strpos($value, "IMAX") !==false) {
		    				$movieArr[] = $value;
		    			}
		    		}

		    		foreach ($movieArr as $value) {
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
				</ul>
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