<?php $pageTitle="Кина"; ?>
<?php include "header.php";?>

<main>
	<section id="cinemas-section">
	    <div class="container">
	    	<div class="row cinema">

		    	<div class="text-center">
		    	    <h1>Кина</h1>
		    	</div>

		    	<?php 
		    		$text = file("db/db_cinema/cinema.txt");

		    		$tile = $note = "";
		    		foreach ($text as $value) {
		    			$tmp = explode("#",$value);
		    			array_pop($tmp);

		    			foreach ($tmp as $v) {
		    				$tmp2 = explode(":",$v);

		    				if ($tmp2[0]=="image") {
		    					$image = $tmp2[1];
		    				}

		    				if ($tmp2[0]=="note") {
		    					$note = $tmp2[1];
		    				}
		    				
		    				if ($tmp2[0]=="title") {
		    					$title = $tmp2[1];	
		    				}

		    				if ($tmp2[0]=="link") {
		    					$link = $tmp2[1];	
		    				}
		    			}

		    			?>

				    	<div class="col-md-4">
				    	    <a href="<?php echo $link; ?>">
			                    <img style="width: 360px; height: 190px;" class="img-responsive img-thumbnail" src="db/db_cinema/uploded/<?php echo $image;?>" alt="<?php echo $title; ?>">
			                </a>
			                <h3>
			                    <?php echo $title; ?>
			                </h3>
			                <p><?php echo $note; ?></p>
			            </div> <!-- class="col-md-4" -->

	            		<?php
			    	}

			    ?>



	    	</div>
	    </div>
	</section>
</main>

<?php include "footer.php"; ?>
