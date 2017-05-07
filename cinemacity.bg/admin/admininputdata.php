    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <div class="jumbotron"></div>
          <div class="row">

           <?php 

				if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true) {

					echo "Добре дошли в административния панел";

				} else {
					header("Location:../index.php");
				}

			?>





          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

<?php include "adminsidebar.php"; ?>