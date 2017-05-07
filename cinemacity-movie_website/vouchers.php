<?php $pageTitle="Ваучери"; ?>
<?php include "header.php";?>

<main>
	<section id="vouchers">
	    <div class="container">
		    <div class="row vouchers-wrapp">

		    <?php 
		    	$text = file("db/db_vouchers/vouchers.txt");
		    	$title = $image = $number = "";
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
		    			if ($tmp2[0]=="note") {
		    				$note = $tmp2[1];
		    			}
		    		}
		    		?>
		    		
		    		<div class="jumbotron">
		    		 <?php echo "<img src='db/db_vouchers/uploded/$image'/>"; ?>
		    		</div>

		    		<div class="main-text">
		    			<h2><?php echo $title; ?></h2>
		    		</div>

		    		<div class="second-text">
		    			<p><?php echo $note; ?></p>
		    		</div>


		    	<?php
		    	}

		    ?>
		    </div>	
	    </div>
	</section><!--/#main-slider-->
</main>

<?php include "footer.php"; ?>
