<?php 

// Задача 7:
// Въведете 3 променливи от уеб форма – час, сума пари, дали съм здрав
// – число със стойност да или не.
// Съставете програма, която взема решения на базата на тези данни по
// следния начин:
//  - ако съм болен няма да излизам
//  - ако имам пари ще си купя лекарства
//  - ако нямам – ще стоя вкъщи и ще пия чай
//  - ако съм здрав ще изляза на кино с приятели
//  - ако имам по-малко от 10 лв ще отида на кафе
// Покажете резултата като съобщение в уеб страница.


	$time = $_GET['time'];
	$time += 0;

	$money = $_GET['money'];
	$money = str_replace(',', '.', $money);
	$money = floatval($money);

	$answer = $_GET['answer'];
	$answer = mb_strtoupper($answer, "utf-8");


	if ($answer === "ДА") {
		$answer = 1;
	}
	elseif ($answer === "НЕ") {
		$answer = 0;
	}
	
	
	if (isset($money) && isset($time) && isset($answer) && is_numeric($time) && is_numeric($money) && is_string($_GET['answer']) && ($time >= 0 && $time <= 24) && ($answer === 0 || $answer === 1)) {

		if ($money > 0 && $answer === 0 && ($time >= 8 && $time <= 24)) {

			echo "Ще си купя лекарства.";

		} elseif ($money === 0 && $answer === 0 && ($time >= 8 && $time <= 24)) {
			
			echo "Ще стоя вкъщи и ще пия чай."; 

		} elseif ($money === 0 && $answer === 0 && ($time >= 0 && $time < 8) ) {
			
			echo "Няма да излизам.";

		} elseif ($money < 10 && $answer === 1 && !($time > 0 && $time <=8)) {
			
			echo "Ще отида на кафе.";

		} elseif ($money >= 10 && $answer === 1 && !($time > 0 && $time <=8)) {
			
			echo "Ще изляза на кино с приятели";

		} else {
			
			echo "Няма да излизам.";
			
		}
	} else {

		echo "Моля, попълнете полетата с правилните данни.";

	}
?>