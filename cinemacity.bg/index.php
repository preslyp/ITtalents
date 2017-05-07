<?php include "header.php";?>


<main>
	<section id="main-slider">
	    <div class="container">
	    	<div class="row">
	    		<?php include "inc/staticbxslider.php"; ?>
	    	</div>
	    </div>
	</section><!--/#main-slider-->

	<section id="mediaSection">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="news">
						<div class="news-header">
							<h2>Новини и Промоции</h2>
						</div>
						<ul class="vertical">

						<?php 

						$text = file("db/db_blog/blogtext.txt");

						$tile = $image = "";
						foreach ($text as $value) {
							$tmp = explode("#",$value);
							array_pop($tmp);

							foreach ($tmp as $v) {
							$tmp2 = explode(":",$v);

							if ($tmp2[0]=="image") {
							$image = $tmp2[1];
							}

							if ($tmp2[0]=="title") {
							$title = $tmp2[1];	
							}
						}

						?>

						<li onclick="location.href = 'blog.php';">
							<a>
								<img class="img-responsive img-vertical" src="db/db_blog/uploded/<?php echo $image;?>" alt="<?php echo $title; ?>" width="100px" >
								<h3><?php echo $title; ?></h3>
							</a>		
						</li>

						<?php
						}

						?>

						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="news">
						<div class="news-header">
							<h2>Трейлъри</h2>
						</div>
				    	<ul class="videoslider">
					    	<?php include "inc/videoslider.php"; ?>	
						</ul>
					</div>	
				</div>

				<div class="col-md-4">
					<div class="news program">
						<div class="news-header">
							<h2>Програмата</h2>
						</div>

						<table class="table table-bordered">
						<tbody>
					        <?php
	
								$number = $cinema = $typeMovie = $hours = "";
								$date = date('WY');
								$text = file("db/db_program/program.txt");

								$programWeekArr = array();
								foreach ($text as $value) {

									if (strpos($value, $date) !==false) {
										$programWeekArr[] = $value;
									}
									
								}

								
								foreach ($programWeekArr as $value) {
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

							 ?>
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

