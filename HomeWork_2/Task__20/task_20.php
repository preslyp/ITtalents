<?php 

	for ($rows=1; $rows <=9 ; $rows++) { 

		echo $rows;

		for ($cols=$rows+1; $cols <=9 ; $cols++) { 
			echo $cols;
		}

		for ($colsSec=0; $colsSec <=$rows-1 ; $colsSec++) { 
			echo $colsSec;
		}
		echo "<br/>";
	}
	for ($newCic=0; $newCic <=9 ; $newCic++) { 
		echo $newCic;
	}

?>