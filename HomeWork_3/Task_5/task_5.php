<?php 

	for ($index=0; $index < 10 ; $index++) { 
		$newArr[$index] = $index * 3;
	}

	foreach ($newArr as $value) {
		echo $value . " ";
	}

?>