<?php include "adminheader.php"; ?>
<?php include "../functions.php"; ?>


<?php 
		$errors = array();
	if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true) {

		if (isset($_POST['submit'])) {

			if (isset($_POST['username']) && !empty($_POST['username'])) {
				$username = check_input($_POST['username']);
			} else {
				$errors[] = "Моля, попълнете полето. Името трябва да е по-голямо от 3 знака";
			}

			if (isset($_POST['password']) && !empty($_POST['password'])) {
				$password = check_input($_POST['password']);
				$password = md5($password);
			} else {
				$errors[] = "Моля, попълнете полето. Поролата трябва да е по-голяма от 4 знака";
			}

			if (empty($errors)) {

				$filetext = "../db/db_users/users.txt";
				$tmp = 'username:'. $username .'#password:'. $password ."#"."\n";
				file_put_contents("$filetext", $tmp, FILE_APPEND);
				
			}
			
		} else {
			$username = $password = "";
		} 

	} else {
		header("Location:../index.php");
	}

?>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
      <div class="blogtitle text-center" >
      	<h2>Потребители</h2>
      </div>
      
        <div class="col-xs-12 col-sm-9 addnote">
          <div class="row">

          <h3>Добавете потребител</h3>
		
			<form method="post" action="adduser.php">
				<div class="form-group">
					<label for="username">Email address</label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<input type="submit" class="btn btn-default" name="submit" value="Добави" >
			</form>
			<?php if (!empty($errors)): ?>

				<?php foreach ($errors as $value): ?>
					<?php echo $value;?> <br>
				<?php endforeach ?>
				
			<?php endif ?>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->



<?php include "adminsidebar.php"; ?>
<?php include "adminfooter.php"; ?>
