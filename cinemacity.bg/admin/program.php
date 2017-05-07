<?php include "adminheader.php"; ?>

    <div class="container">
      <div class="row">
      <div class="blogtitle text-center" >
      	<h2>Програмата за седмицата</h2>
      </div>
      
        <div class="col-xs-12 col-sm-5 addnote">
        	<div class="row">

        	<h3>Добавете програма</h3>

		    <?php 
				if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true) {

					include "../functions.php";
					
					if (isset($_POST['add'])) {

						if (isset($_POST['weeks']) && isset($_POST['years']) && isset($_POST['movieTitle']) && isset($_POST['cinemaType']) && isset($_POST['movieType']) && isset($_POST['hours'])) {
							
							$week = $_POST['weeks'];
							$year = $_POST['years'];
							$cinemaType = $_POST['cinemaType'];
							$movieType = $_POST['movieType'];
							$movieTitle = $_POST['movieTitle'];
							$hours = $_POST['hours'];

							$filetext = "../db/db_program/program.txt";


							$tmp = 'mountyear:'. $week.$year .'#cinema:'. $cinemaType .'#title:'. $movieTitle . '#type:'. $movieType . '#hours:'. $hours ."#"."\n";

							file_put_contents("$filetext", $tmp, FILE_APPEND);

						} else {
							echo "Моля, попълнете всички полета";
						}	
					} else {
						$week = "";
						$year = "";
						$cinemaType = "";
						$movieType = "";
						$hours = "";
					}

				} else {
					header("Location:../index.php");
				}

			?>

        <form enctype="multipart/form-data" action="./program.php" method="post" accept-charset="utf-8">

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


          	<label for="">Изберете кино</label>

			<?php 
	    		$text = file("../db/db_cinema/cinema.txt");
	    		$cinemaArr = array();

	    		$tile = $note = "";
	    		foreach ($text as $value) {
	    			$tmp = explode("#",$value);
	    			array_pop($tmp);

	    			foreach ($tmp as $v) {
	    				$tmp2 = explode(":",$v);
	    				
	    				if ($tmp2[0]=="title") {
	    					$title = $tmp2[1];	
	    				}
	    			}

	    			$cinemaArr[] = $title;
		    	}
		    ?>


          	<select id="cinemaType" name="cinemaType"  class="form-control">
          	    <?php foreach ($cinemaArr as $type): ?>
          	    <option value="<?php echo $type; ?>"><?php echo $type; ?> </option>
          	    <?php endforeach ?>                                        
          	</select>
          	<br/>

          	<label for="">Изберете филм</label>

			<?php 
	    		$text = file("../db/db_movies/movie.txt");
	    		$movieArr = array();

	    		$tile = $note = "";
	    		foreach ($text as $value) {
	    			$tmp = explode("#",$value);
	    			array_pop($tmp);

	    			foreach ($tmp as $v) {
	    				$tmp2 = explode(":",$v);
	    				
	    				if ($tmp2[0]=="title") {
	    					$title = $tmp2[1];	
	    				}
	    			}

	    			$movieArr[] = $title;
		    	}
		    ?>

          	<select id="movieTitle" name="movieTitle"  class="form-control">
          	    <?php foreach ($movieArr as $title): ?>
          	    <option value="<?php echo $title; ?>"><?php echo $title; ?> </option>
          	    <?php endforeach ?>                                        
          	</select>
          	<br/>

          	<label for="">Изберете вида на филма</label>
          	<?php $movieType = array(  "IMAX", "4DX", "3D", "Subtitle", "Duplicate", "Soon");	?>
          	<select id="movieType" name="movieType"  class="form-control">
          	    <?php foreach ($movieType as $type): ?>
          	    <option value="<?php echo $type; ?>"><?php echo $type; ?> </option>
          	    <?php endforeach ?>                                        
          	</select>
          	<br/>

			<label for="">Изберете час</label>
			<br/>
          	<select id="hours" name="hours" class="form-control">
          		<option value="10,30">10,30</option>
          		<option value="13,00">13,00</option>
          		<option value="15,00">15,00</option>
          		<option value="17,00">17,00</option>
          		<option value="19,30">19,30</option>
          		<option value="22,00">22,00</option>
          	</select>
          	<br/>
          
          	<input type="submit" name="add" value="Публикувай">
          	<br/>
          	<br/>
        </form>
        	</div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <!-- Публикувани досега -->
        <div class="col-xs-12 col-sm-4">

		<h3>Програма за седмица <?php echo date('W'); ?></h3>
		<table class="table table-bordered">
		<tbody>
	        <?php include "inc/readprogramfile.php";  ?>
        </tbody>

        </table>
        	
        </div> 

<?php include "adminsidebar.php"; ?>
<?php include "adminfooter.php"; ?>
