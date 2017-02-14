<?php 

$number = $_GET['number'];
$number--;
$color = $number % 4;
$weight = $number / 4;
$weight = (int)$weight;

//var_dump($color);	
//var_dump($tegest);

if (isset($number) && is_numeric($number) && ($number >= 1 && $number <= 51)) {

	for ($i = $weight; $i < 13 ; $i++) { 

		for ($j = $color; $j < 4; $j++) { 
			switch ($i) { 
				case 0:
			   		echo "2 "; 
			   		break;
			     case 1: 
			     	echo "3 "; 
			     	break;
			     case 2:
			     	echo"4 "; 
			     	break;
			     case 3:
			     	echo "5 "; 
			     	break;
			     case 4: 
				     echo "6 "; 
				     break;
			     case 5: 
			     	echo "7 "; 
			     	break;
			     case 6: 
			     	echo "8 "; 
			     	break;
			     case 7: 
			     	echo "9 "; 
			     	break;
			     case 8: 
			     	echo "10 "; 
			     	break;
			     case 9: 
			     	echo "Вал "; 
			     	break;
			     case 10:  
			     	echo "Дама "; 
			     	break;
			     case 11:
			     	echo "Поп "; 
			     	break;
			     case 12:
			     	echo "Асо "; 
			     	break;
			    }
			    switch ($j) { 
			    	case 0:
			    	echo "спатия, "; 
			    	break;
			      case 1: 
			      	echo "каро, "; 
			      	break;
			      case 2:
			      	echo "купа, "; 
			      	break;
			      case 3: 
			      echo "пика, "; 
			      break;
			     }
		}

		$color=0;
	 } 

} else {
	echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
}		


?>