<?php 

function Palindrom($originalNum, $reversedNum) {
	
	if($originalNum < 1) {
		return (int)$reversedNum;
	}

    $reversedNum = $reversedNum.($originalNum % 10);
    return Palindrom ($originalNum/10,$reversedNum);
}


$number = 1221;

echo "Оргиналното число е: $number . <br/>";

$poliNum = Palindrom($number, '');

echo "Новото число е: $poliNum . <br/>";

if($number === $poliNum){
    echo "Палидром е";
} else {
    echo "Не е палидром";
}

?>