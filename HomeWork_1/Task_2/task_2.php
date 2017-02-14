<?php 

// Въведете 2 различни целочислени числа от уеб форма. Запишете
// тяхната сума, разлика, произведение, остатък от деление и
// целочислено деление в отделни променливи и разпечатайте тези
// резултати. 


	$firstNumber = $_GET['firstNumber'];
	$firstNumber+=0;	
	$secondNumber = $_GET['secondNumber'];
	$secondNumber+=0;
	$result;

	if (!empty($firstNumber) && !empty($secondNumber) && is_int($firstNumber) && is_int($secondNumber)) {

		echo "Сума: ". $result = $firstNumber + $secondNumber . '<br>';
		echo "Разлика: " . $result = $firstNumber - $secondNumber . '<br>';
		echo "Произведение: " . $result = $firstNumber * $secondNumber . '<br>';
		echo "Деление: " . $result = $firstNumber / $secondNumber . '<br>';
		echo "Остатък от деление: " . $result = $firstNumber % $secondNumber . '<br>';

	} else {
		echo "<h4>Моля, попълнете полетата.</h4>";
	}
?>