<?php 
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>
		<?php if(isset($pageTitle)){
			echo $pageTitle;	
		} else {
			echo "Начало";
		}
		
		?>
			
		</title>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/jquery.bxslider.css" rel="stylesheet">
	<link href="assets/css/prettyPhoto.css" rel="stylesheet" type='text/css'>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="assets/css/style.css" rel="stylesheet" type='text/css'>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$(".loader").fadeOut("slow");
		});
		$( function() {

		var d = new Date();
		var startday = d.getDate()-3;
		
		var lastday = (7 + startday);

		$( "#datepicker" ).datepicker({ minDate: startday, maxDate: lastday });
		} );
	</script>
</head>

<body id="top">
	<div class="loader"></div>
	<header id="header">
	    <nav class="navbar navbar-inverse" role="banner">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="./index.php"><img src="assets/images/cc_logo.png" alt="logo"></a>
	            </div>
	
	            <div class="collapse navbar-collapse navbar-right">
	                <ul class="nav navbar-nav">
						<li class="dropdown">
						    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Програма</a>
						    <ul class="dropdown-menu">
			    			<?php 
			    	    		$text = file("db/db_cinema/cinema.txt");

			    	    		$tile = $note = "";
			    	    		foreach ($text as $value) {
			    	    			$tmp = explode("#",$value);
			    	    			array_pop($tmp);

			    	    			foreach ($tmp as $v) {
			    	    				$tmp2 = explode(":",$v);
			    	    				
			    	    				if ($tmp2[0]=="title") {
			    	    					$title = $tmp2[1];	
			    	    				}
			    	    				if ($tmp2[0]=="link") {
			    	    					$link = $tmp2[1];	
			    	    				}
			    	    			}

			    	    			?>
			    	  				<li><a onclick="location.href = 'program.php?name=<?php echo $title ?>';"><?php echo $title; ?></a></li>

			                		<?php
			    		    	}

			    		    ?>

						    </ul>
						</li>
						<li><a href="movies.php" title="Филми">Филми</a></li>          
						<li><a href="cinemas.php" title="Кина">Кина</a></li>
						<li><a href="vouchers.php" title="Кино ваучери">Ваучери</a></li>
						<li><a href="imax.php" title="Imax">Imax</a></li>
						<li><a href="fourdx.php" title="4dx">4dx</a></li>
						<li><a href="blog.php" title="Новини">Новини</a></li>
						<li><a href="contact.php" title="Новини">Контакти</a></li>
	                </ul>
	            </div>
	        </div><!--/.container-->
	    </nav><!--/nav-->

	    <div class="search-section">
	        <div class="container search-container">
	            <div class="row">
	                <div class="col-sm-6 col-xs-12">
	                    <div class="search">
	                        <form role="form" id="search-form" action="search.php" method="GET">
	                        	<?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
	                          	<input class="search-form col-xs-4" autocomplete="on" placeholder="Търси филм" id="search" type="text" name="q" value="<?php echo htmlspecialchars($q); ?>" />
	                        	<input type="submit" name="submit" value="Search">
	                        </form>
	                    </div>
	                </div> <!-- col-sm-6 col-xs-8 -->
	                <div class="col-sm-6 hidden-xs">
	                	<div class="row">
	                    	<div class="col-sm-6 col-xs-8 text-center">
	                    		<p>или</p>
	                    	</div>
	                    	<div class="col-sm-6 col-xs-4 text-center">
	                        	<ul class="subnav">
									<li class="dropdown">
									    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Програма <i class="fa fa-angle-down"></i></a>
									    <ul class="dropdown-menu">

							    			<?php 
							    	    		$text = file("db/db_cinema/cinema.txt");

							    	    		$tile = $note = "";
							    	    		foreach ($text as $value) {
							    	    			$tmp = explode("#",$value);
							    	    			array_pop($tmp);

							    	    			foreach ($tmp as $v) {
							    	    				$tmp2 = explode(":",$v);
							    	    				
							    	    				if ($tmp2[0]=="title") {
							    	    					$title = $tmp2[1];	
							    	    				}
							    	    				if ($tmp2[0]=="link") {
							    	    					$link = $tmp2[1];	
							    	    				}
							    	    			}

							    	    			?>
							    	  				<li><a onclick="location.href = 'program.php?name=<?php echo $title ?>';"><?php echo $title; ?></a></li>

							                		<?php
							    		    	}

							    		    ?>
									    </ul>
									</li>
				                </ul>
	                    	</div>
	                    </div>
	                </div><!-- col-sm-6 col-xs-4 -->
	            </div>
	        </div><!--/.container search-form-->
	    </div><!--/.search-section-->
	</header><!--/header-->

			
		
	
