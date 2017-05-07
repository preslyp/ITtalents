<?php 
	include "adminheader.php";

	if (isset($_GET['page'])) {
		
		$page = $_GET['page'];

		if (!file_exists('./'. $page . '.php')) {
			$page = "404";
		}
	} else {
		$page = 'admininputdata';
	}

?>


<div>
	<?php include ($page.'.php'); ?>
</div>



<?php include "adminfooter.php"; ?>

