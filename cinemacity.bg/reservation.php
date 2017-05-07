<?php
	session_start();
	include "functions.php";

	$errors = array();

	if (isset($_POST['submitchoice'])) {

		if (isset($_POST['firstName']) && !empty($_POST['firstName'])) {
			$firstName = check_input($_POST['firstName']);
		} else {
			$errors[] = "Попълнете първото име";
		}

		if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
			$lastName = check_input($_POST['lastName']);
		}else {
			$errors[] = "Попълнете фамилия";
		}

		if (isset($_POST['choosecinema']) && !empty($_POST['choosecinema'])) {
			$cinema = check_input($_POST['choosecinema']);
		} else {
			$errors[] = "Изберете кино";
		}

		if (isset($_POST['chooseMovie']) && !empty($_POST['chooseMovie'])) {
			$movie = check_input($_POST['chooseMovie']);
		} else {
			$errors[] = "Изберете филм";
		}

		if (isset($_POST['typeMovie']) && !empty($_POST['typeMovie'])) {
			$typeMovie = check_input($_POST['typeMovie']);
		} else {
			$errors[] = "Изберете вида на филма";
		}

		if (isset($_POST['datepicker']) && !empty($_POST['datepicker'])) {
			$datepicker = check_input($_POST['datepicker']);
		} else {
			$errors[] = "Изберете дата";
		}

		if (isset($_POST['choosehours']) && !empty($_POST['choosehours'])) {
			$hour = check_input($_POST['choosehours']);
		} else {
			$errors[] = "Изберете час";
		}


		if (empty($errors)) {
			$filetext = "db/db_reservation/reservation.txt";

			$tmp = 'name:'. $firstName .' '. $lastName .'#cinema:'. $cinema . '#movie:'. $movie . '#type:'. $typeMovie . '#date:'. $datepicker . '#hour:'. $hour ."#"."\n";

			file_put_contents("$filetext", $tmp, FILE_APPEND);
			header("Location: reservationpage.php");

		} else {
			$_SESSION['error'] = $errors;
			header("Location: index.php");
		}
	} else {
		header("Location: index.php");
	}

 ?>