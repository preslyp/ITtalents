<?php $pageTitle="Филми"; ?>
<?php include "header.php";?>


<main>
	<section id="main-slider">
	    <div class="container">
	    	<div class="row">
		    	<ul class="videoslider">
		    	<?php include "inc/videoslider.php"; ?>	
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