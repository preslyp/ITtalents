<?php include "adminheader.php"; ?>

    <div class="container">
      <div class="row">
      <div class="blogtitle text-center" >
      	<h2>Кина</h2>
      </div>
      
        <div class="col-xs-12 col-sm-5 addnote">
          <div class="row">

          <h3>Добавете ново кино</h3>

           <?php 
				if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true) {

					include "../functions.php";

					$blogtitle = $addnote = $fileOriginalName = $count = "";
					
					if (isset($_POST['add'])) {

						if (isset($_FILES['profilePic'])) {
							$fileOnServerName = $_FILES['profilePic']['tmp_name'];
							$fileOriginalName = $_FILES['profilePic']['name'];
							
							if (is_uploaded_file($fileOnServerName)) {
								if (move_uploaded_file($fileOnServerName, 
										'../db/db_cinema/uploded/'.$fileOriginalName)) {
								} else {
									echo "Файлът не беше качен";
								}
							}
							else {
								echo "Файлът не беше качен";
							}
						}

						if (isset($_POST['blogtitle']) && (strlen($_POST['blogtitle']) > 5 && strlen($_POST['blogtitle']) <=300)) {
							
							if (!empty($_POST['addnote'])) {

								$count = $_POST["counter"];
								$count++; 

								$blogtitle = check_input($_POST['blogtitle']);
								$addnote = check_input($_POST['addnote']);
								$link = $_POST['link'];

								$filetext = "../db/db_cinema/cinema.txt";


								$tmp = 'number:'. $count .'#image:'. $fileOriginalName .'#title:'. $blogtitle .'#note:'. $addnote . '#link:'. $link ."#"."\n";

								file_put_contents("$filetext", $tmp, FILE_APPEND);

								include "inc/readcinemafile.php";

							} else {
								echo "<p class=\"error\">Моля, напишете нещо.</p>";
							}
					
						} else {
							echo "<p class=\"error\">Заглавието трябва да е между 5 и 300 знака.</p>";
							$count = 1;
						}	
					}

					if (isset($_POST['delete'])) {

						if (isset($_POST['deletenumber'])) {
							$number = check_input($_POST['deletenumber']);
							$number+=0;
							$deletenumber = $number-1;
							$noteArr = file("../db/db_cinema/cinema.txt");

							if (array_key_exists($deletenumber, $noteArr)) {

								$index=0; 
								$array=array();

								$headler = fopen("../db/db_cinema/cinema.txt", "r") or die("can't open the file");
									while(!feof($headler)) {
										$array[$index] = fgets($headler);	
										++$index;
									}

								fclose($headler);
									
								$write = fopen("../db/db_cinema/cinema.txt", "w") or die("can't open the file");
									foreach($array as $key => $value) {
											if($key!== $deletenumber) {
												fwrite($write,$value);
											}
									}
								fclose($write);

								include "inc/readcinemafile.php";

								
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

		
			<form enctype="multipart/form-data" action="./admincinema.php" method="post" accept-charset="utf-8">
				<label for="">Въведете име на киното:</label>
				<br/>
				<input type="text" name="blogtitle" size="60">
				<br/>
				<br/>
				<label for="">Въведете адрес</label>
				<br/>
				<textarea name="addnote" cols="61" rows="10"></textarea>	
				<br/>
				<br/>
				<label for="">Въведете връзка</label>
				<br/>
				<input type="text" name="link" size="60">	
				<br/>
				<br/>
				<label for="">Въведете снимка</label>
				<br/>
				 <input type="file" name="profilePic">
				<label for="">Изтрийте кино</label>
				<input type="number" name="deletenumber">
				<br/>
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
			<h3>Кина</h3>
			<table class="table table-bordered">
				<tbody>
        			<?php include "inc/readcinemafile.php";  ?>
        		</tbody>
        	</table>	
        </div> 

<?php include "adminsidebar.php"; ?>
<?php include "adminfooter.php"; ?>
