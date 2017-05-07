<?php $pageTitle="Програма"; ?>
<?php include "header.php";?>


<main>
	<section id="mainMovie">
	    <div class="container">
	    	<div class="row">

	    	<?php 

		    	if (isset($_GET['name'])) {

		    		$name = $_GET['name'];

	    			$number = $cinema = $typeMovie = $hours = "";
	    			$date = date('WY');
	    			$text = file("db/db_program/program.txt");

	    			$programWeekArr = array();
	    			foreach ($text as $value) {
	    				if (strpos($value, $date) !==false) {
	    					$programWeekArr[] = $value;
	    				}
	    			}

	    			$movieArr = array();

	    			foreach ($text as $value) {
	    				if (strpos($value, $name) !==false) {
	    					$movieArr[] = $value;
	    				}
	    			}

	    			echo "
	    			<caption class=\"text-center\"><h2>Програма на ". $name ."</h2></caption>

	    			<table class=\"table table-bordered\">
						<tbody>";

	    			foreach ($movieArr as $value) {
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
	    			echo "</tbody></table>";
		    	}

	    	 ?>
			
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





