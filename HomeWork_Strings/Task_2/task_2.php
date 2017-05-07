<?php 

$textOne = $_GET['text1'];
$textTwo = $_GET['text2'];


if (!empty($textOne) && !empty($textTwo) && (strlen($textOne) >= 10 && strlen($textOne) <=20) && (strlen($textTwo) >= 10 && strlen($textTwo) <=20)) {

	$result = strcmp($textOne, $textTwo);
	if ($result === 1) {
		echo "Дължината на по-дългата дума е " . strlen($textOne) . '<br/>';
	} elseif($result === -1) {
		echo "Дължината на по-дългата дума е " . strlen($textTwo) . '<br/>';
	} else {
		echo "Двете думи са равни: " . strlen($textOne) . '<br/>';
	}

	$subOne = substr($textOne, 5); 
	$subTwo = substr($textTwo, 0, 5);

	echo "Първа въведена дума е $textOne." . '<br/>';
	echo "Втората въведена дума е $textTwo." . '<br/>';
	echo "Новата дума е: " . $subTwo . $subOne . ".";

} else {
	echo "Въведете текст с дължина между 10 и 20 символа. / Попълнете полетата.";
}


?>