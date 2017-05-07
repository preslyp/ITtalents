<?php include "adminheader.php"; ?>

    <div class="container">
      <div class="row">
      <div class="blogtitle text-center" >
      	<h2>Програмата за седмицата</h2>
      </div>
      
        <div class="col-xs-12 col-sm-5 addnote">
        	<div class="row">

        	<h3>Добавете филм</h3>

		    <?php 
				if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true) {

					include "../functions.php";
					
					if (isset($_POST['add'])) {

						if (isset($_POST['weeks']) && isset($_POST['years']) && isset($_POST['title']) && isset($_POST['movieType']) && isset($_POST['link'])) {
							
							$count = $_POST["counter"];
							$count++;

							$week = $_POST['weeks'];
							$year = $_POST['years'];
							$title = $_POST['title'];
							$type = $_POST['movieType'];
							$link = $_POST['link'];

							$filetext = "../db/db_movies/movie.txt";


							$tmp = 'number:'. $count .'#mountyear:'. $week.$year .'#title:'. $title .'#type:'. $type . '#link:'. $link ."#"."\n";

							file_put_contents("$filetext", $tmp, FILE_APPEND);

							include "inc/readmoviefile.php";
							

						} else {
							$count = 1;
							echo "Моля, попълнете всички полета";
						}	
					} else {
						$week = "";
						$year = "";
						$title = "";
						$type = "";
						$link = "";
						$count = "";
					}

					if (isset($_POST['delete'])) {

						if (isset($_POST['deletenumber'])) {
							$number = check_input($_POST['deletenumber']);
							$number+=0;
							$deletenumber = $number-1;
							$noteArr = file("../db/db_movies/movie.txt");

							if (array_key_exists($deletenumber, $noteArr)) {

								$index=0; 
								$array=array();

								$headler = fopen("../db/db_movies/movie.txt", "r") or die("can't open the file");
									while(!feof($headler)) {
										$array[$index] = fgets($headler);	
										++$index;
									}

								fclose($headler);
									
								$write = fopen("../db/db_movies/movie.txt", "w") or die("can't open the file");
									foreach($array as $key => $value) {
											if($key!== $deletenumber) {
												fwrite($write,$value);
											}
									}
								fclose($write);

								include "inc/readmoviefile.php";

								
							} else {
								echo "<p class=\"error\">This note does not exist.</p>";
							}
							
						} else {
							$deletenumber = "";
							echo "<p class=\"error\">Please, enter a number.</p>";
						}
						
					}
					?>

				<?php

				} else {
					header("Location:../index.php");
				}

			?>

        <form enctype="multipart/form-data" action="./newmovie.php" method="post" accept-charset="utf-8">

        	<label for="">Изберете номер на седмицата</label>
          	<br/>
          	<select name="weeks" class="form-control">

          	    <?php for ($week=date('W'); $week <= 52 ; $week++): ?>

          	        <option value="<?php echo $week; ?>"> <?php echo $week; ?> </option>

          	    <?php endfor ?>

          	</select>
          	<br/>
          	<label for="">Изберете година</label>
          	<br/>
          	<select name="years" class="form-control">

          	    <?php for ($year=date('Y'); $year <= 2020 ; $year++): ?>

          	        <option value="<?php echo $year; ?>"> <?php echo $year; ?> </option>

          	    <?php endfor ?>

          	</select>
          	<br/>
          	<label for="">Въведете заглавие на филма</label>
          	<br/>
          	<input type="text" name="title" class="form-control">	
          	<br/>
          	<label for="">Изберете вида на филма</label>

          	<?php $movieType = array(  "IMAX", "4DX", "3D", "Subtitle", "Duplicate", "Soon");	?>

          	<select id="movieType" name="movieType"  class="form-control">
          	    <?php foreach ($movieType as $type): ?>
          	    <option value="<?php echo $type; ?>"><?php echo $type; ?> </option>
          	    <?php endforeach ?>                                        
          	</select>
          	<br/>
          	<label for="">Въведете линк</label>
          	<br/>
          	<input type="text" name="link" class="form-control">	
          	<br/>
          	<label for="">Изтрийте филм</label>
          	<br/>
          	<input type="number" name="deletenumber" class="form-control">
          	<br/>
          	<input type="submit" name="add" value="Публикувай">
          	<input type="hidden" name="counter" value="<?php echo $count;?>"> 
          	<input type="submit" name="delete" value="Изтрий">
          	<br/>
          	<br/>
        </form>
        	</div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <!-- Публикувани досега -->
        <div class="col-xs-12 col-sm-4">

		<h3>Филми на екран</h3>
			<table class="table table-bordered">
				<tbody>
        			<?php include "inc/readmoviefile.php";  ?>
        		</tbody>
        	</table>
        </div> 

<?php include "adminsidebar.php"; ?>
<?php include "adminfooter.php"; ?>
