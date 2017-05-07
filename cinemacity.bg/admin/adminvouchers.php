<?php include "adminheader.php"; ?>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
      <div class="blogtitle text-center" >
      	<h2>Блог</h2>
      </div>
      
        <div class="col-xs-12 col-sm-9 addnote">
          <div class="row">

          <h3>Добавете нова статия</h3>

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
										'../db/db_vouchers/uploded/'.$fileOriginalName)) {
								} else {
									echo "Файлът не беше качен";
								}
							}
							else {
								echo "Файлът не беше качен";
							}
						}

						if (isset($_POST['blogmaintext']) && !empty($_POST['addnote']) ){

								$count = $_POST["counter"];
								$count++; 
							
								$blogmaintext = check_input($_POST['blogmaintext']);
								$addnote = check_input($_POST['addnote']);

								$filetext = "../db/db_vouchers/vouchers.txt";


								$tmp = 'number:'. $count . '#image:'. $fileOriginalName .'#title:'. $blogmaintext .'#note:'. $addnote ."#"."\n";

								file_put_contents("$filetext", $tmp, FILE_APPEND);
					
						} else {
							echo "<p class=\"error\">Моля, попълнете данните.</p>";
							$count = 1;
							
						}	
					}

					if (isset($_POST['delete'])) {

						if (isset($_POST['deletenumber'])) {
							$number = check_input($_POST['deletenumber']);
							$number+=0;
							$deletenumber = $number-1;
							$noteArr = file("../db/db_vouchers/vouchers.txt");

							if (array_key_exists($deletenumber, $noteArr)) {

								$index=0; 
								$array=array();

								$headler = fopen("../db/db_vouchers/vouchers.txt", "r") or die("can't open the file");
									while(!feof($headler)) {
										$array[$index] = fgets($headler);	
										++$index;
									}

								fclose($headler);
									
								$write = fopen("../db/db_vouchers/vouchers.txt", "w") or die("can't open the file");
									foreach($array as $key => $value) {
											if($key!== $deletenumber) {
												fwrite($write,$value);
											}
									}
								fclose($write);
								
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

		
			<form enctype="multipart/form-data" action="./adminvouchers.php" method="post" accept-charset="utf-8">
				<label for="">Въведете основен текст:</label>
				<br/>
				<textarea name="blogmaintext" cols="120" rows="10"></textarea>	
				<br/>
				<br/>
				<label for="">Въведете втори текст</label>
				<br/>
				<textarea name="addnote" cols="120" rows="10"></textarea>	
				<br/>
				<br/>
				<label for="">Въведете снимка</label>
				<br/>
				<input type="file" name="profilePic">
				<label for="">Изтрийте статия</label>
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

<?php include "adminsidebar.php"; ?>
<?php include "adminfooter.php"; ?>
