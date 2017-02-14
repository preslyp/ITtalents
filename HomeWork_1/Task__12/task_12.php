<?php 

// Задача 12:
// Високосни години са всички години кратни на 4 с изключения
// столетията, но без столетия кратни на 400, т.е. 1900 не е високосна,
// но 1600 и 2000 са високосни.
// Съставете програма, която по дадени ден, месец, година отпечатва
// следващата дата.
// Входни данни: три числа за ден, месец, година.
// Пример: 28, 2, 2000
// Изход: 1,3,2000



	$date = $_GET['date'];
	$date += 0;

	$month = $_GET['month'];
	$month += 0;

	$year = $_GET['year']; 
	$year += 0;
	
	$mistake = '';
	$lastDay;
	
	if (!empty($date) && !empty($month) && !empty($year) && (is_int($date) && is_int($month) && is_int($year)) &&  !($date < 1 || $date > 31 || $month < 1 || $month > 12 || $year < 1000 || $year > 9999) ) {
		if ($month === 2) {
			if (($year % 4 === 0) && ($year % 100 != 0) || ($year % 400 === 0)){
				$lastDay = 29;
			}
			else{
				$lastDay = 28;
			}
		}
		elseif (($month === 4) || ($month === 6) || ($month === 9) || ($month === 11)) {
			$lastDay = 30;
		}
		else {
			$lastDay = 31;
		}

		if ($date > $lastDay ) {
			$mistake = "Грешка. Въвели сте повече дни, отколкото съдържа месецът.";
		}
		elseif ($date < $lastDay) {
			$date++;
		}
		else {
			$date = 1;
		}

		if ($month < 12) {
			$month++;
		}
		else {
			$month = 1;
			$year++;
		}

		if ($mistake) {
			echo $mistake;
		}
		else {
			echo "$date, $month, $year";
		}				
	} else {
		echo "Моля, въведете валидни данни за ден, месец и година.";
	}
?>