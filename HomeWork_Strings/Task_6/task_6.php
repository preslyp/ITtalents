<?php 

$textOne = $_GET['text'];

if (!empty($textOne) && is_string($textOne)) {

	echo $newStr = mb_convert_case($textOne, MB_CASE_TITLE, "UTF-8");

} else {
	echo "Въведете правилните данни. / Попълнете полетo.";
}
