<div class="reserve">
	<h3>Резервиране</h3>

	<form action="reservation.php" method="POST" accept-charset="utf-8" name="reserveForm">

		<div id="firstName">
			<input id="firstName" type="text" name="firstName" placeholder="Въведете име">
		</div><!-- id="firstName" -->

		<div id="lastName">
			<input id="lastName" type="text" name="lastName" placeholder="Въведете фамилия">
		</div><!-- id="lastName" -->

		<div id="cinema">
			<select name="choosecinema">
				<option value="cinema">Избери кино</option>
				<?php 
		    		$text = file("db/db_cinema/cinema.txt");
		    		$tile = "";
		    		foreach ($text as $value) {
		    			$tmp = explode("#",$value);
		    			array_pop($tmp);

		    			foreach ($tmp as $v) {
		    				$tmp2 = explode(":",$v);
		    				
		    				if ($tmp2[0]=="title") {
		    					$title = $tmp2[1];	
		    				}
		    			}
		    			?>
		    			<option value="<?php echo $title; ?>"><?php echo $title; ?></option>
	            		<?php
			    	}
			    ?>
			</select>
		</div><!-- id="cinema" -->

		<div id="chooseMovie">
			<select name="chooseMovie" id="choose">
				<option value="movie">Избери филм</option>

				<?php
					$date = date('WY');
					$text = file("db/db_program/program.txt");
					$movieArr = array();
					$movieYearArr = array();
					foreach ($text as $value) {//масив от филмите от една и съща седмица
						if (strpos($value, $date) !==false) {
							$movieYearArr[] = $value;
						}
					} 

					foreach ($movieYearArr as $value) { // масив от заглавията
						$tmp = explode("#",$value);
						array_pop($tmp);
						foreach ($tmp as $v) {
							$tmp2 = explode(":",$v);
							if ($tmp2[0]=="title") {
								$movieArr[] = $tmp2[1];
							}
						}
					}

					foreach ($movieArr as $value) {
					?>
					
					<option id="movieName" value="<?php echo $value; ?>"><?php echo $value; ?></option>

					<?php	
					} 
				?>
			</select>
		</div> <!-- id="chooseMovie" -->

		<div id="type">
			<select name="typeMovie" id="typeMovie">
				<option value="type">Избери жарн</option>
			</select>
		</div><!-- id="cinema" -->

		
		<div id="time">
			<input type="text" name="datepicker" id="datepicker" value="Избери дата">
		</div> <!-- id="time" -->

		<select name="choosehours">
			<option value="">Изберете час</option>
			<option value="10,30">10,30</option>
			<option value="13,00">13,00</option>
			<option value="15,00">15,00</option>
			<option value="17,00">17,00</option>
			<option value="19,30">19,30</option>
			<option value="22,00">22,00</option>
		</select>

	
		<div class="reg-login text-center">
			<input class="submitchoice" type="submit" name="submitchoice" value="Резервирай"></input>
		</div>
	</form>
	<div id="errors">
		<?php 
			if (isset($_SESSION['error'])) {
				$error = $_SESSION['error'];

				foreach ($error as $value) {
				echo "<p class=\"errors\">" . $value . "</p></br>";	
				}
				
				session_destroy();
			}
		?>
	</div>
</div>
<div class="fb-page" data-href="https://www.facebook.com/CinemaCityBulgaria/" data-tabs="timeline" data-width="300" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CinemaCityBulgaria/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CinemaCityBulgaria/">cinemacity</a></blockquote></div>