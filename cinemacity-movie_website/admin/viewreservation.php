<?php include "adminheader.php"; ?>

    <div class="container">
      <div class="row">
      <div class="blogtitle text-center" >
      	<h2>Резервации</h2>
      </div>
      
        <div class="col-xs-12 col-sm-9 addnote">
        	<div class="row">

        	<h3>Направени резервации</h3>

		    <?php 
				if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true) {

			?>

				<table class="table table-bordered">
					<tbody>
	        			<?php include "inc/readreservation.php";  ?>
	        		</tbody>
	        	</table>

			<?php		
				} else {
					header("Location:../index.php");
				}

			?>
        	</div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

<?php include "adminsidebar.php"; ?>
<?php include "adminfooter.php"; ?>









