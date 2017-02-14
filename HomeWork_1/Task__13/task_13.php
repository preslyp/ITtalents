<?php 

// Задача 13:
// Да се състави програма, която да отгатне колко е студено/топло по
// въведената температура t в градус Целзий.
// Температурните интервали са:
// под -20 ледено студено;
// между 0 и -20 - студено;
// между 15 и 0 - хладно;
// между 25 и 15 - топло;
// над 25 – горещо.
// Входни данни: цяло число от интервала [-100..100].
// Пример: 12
// Изход: хладно


	$temperature = $_GET['temperature'];
	$temperature += 0;

	if (!empty($temperature) && ($temperature >= -100 && $temperature <= 100) && is_int($temperature)) {

		if ($temperature < -20) {
			echo "Ледено студено";
		}
		elseif (($temperature <= 0) && ($temperature > -20))  {
			echo "Студено";
		}
		elseif (($temperature >0) && ($temperature <= 15)) {
			echo "Хладно";
		}
		elseif (($temperature >15) && ($temperature <= 25)) {
			echo "Топло";
		}
		elseif ($temperature >25) {
			echo "Горещо";
		}
	} else {
		echo "Не сте попълнили полето или сте въвели температура, която не е между - 100 и 100 градуса.";
	}

	
?>