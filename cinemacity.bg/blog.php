<?php $pageTitle="Новини"; ?>
<?php include "header.php";?>

<main>
	<section id="main" class="container">
		    <div class="row">
			    <div class="col-xs-12 col-md-9 blog">

			    <div class="text-center">
			        <h1>Новини и промоции</h1>
			    </div>

			    <div class="col-xs-12 blog-content">

			    <?php
			    	$text = file("db/db_blog/blogtext.txt");

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
			    		}

			    		?>
			    		<div class="media">
			    		  <div class="media-left">
			    		      <img class="media-object img-responsive img-thumbnail" src="db/db_blog/uploded/<?php echo $image;?>" alt="<?php echo $title; ?>">
			    		  </div>
			    		  <div class="media-body">
			    		    <h2 class="media-heading"><?php echo $title; ?></h2>
			    		    <p><?php echo $note; ?></p>
			    		  </div>
			    		</div>
			    	<?php
			    	}

			    ?>


			    

			    </div> <!-- class="col-xs-12 blog-content" -->

		    	</div><!-- class="col-xs-12 col-md-9 blog" -->
		    	<aside class="col-xs-12 col-md-3">

		    		<?php include "aside.php"; ?>

		    	</aside>
	    	</div><!-- class="row" -->
	</section><!--/#main-slider-->
</main>

<?php include "footer.php"; ?>