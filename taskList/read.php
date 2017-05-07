<?php 

include "Database.php";


try {

	$selectQuery = "SELECT * FROM tasks";

	$statment = $db->query($selectQuery);

	while ($row = $statment->fetch(PDO::FETCH_ASSOC)) {

		$create_date = strftime("%d %B %Y", strtotime($row['created_at']));

	    $output = "<tr>
            <td title='Click to edit'>
	            <div class='editable' onclick=\"makeElementEditable(this)\" onblur=\"updateTaskName(this,". $row['id'] ." )\">"
	            . $row['name'] ."</div>
            </td>
            <td title='Click to edit'>
            	<div class='editable' onclick=\"makeElementEditable(this)\" onblur=\"updateTaskDescription(this,". $row['id'] .")\">". $row['description'] . " </div>
            </td>
            <td title='Click to edit'>
            	<div  class='editable' onclick=\"makeElementEditable(this)\" onblur=\"updateTaskStatus(this,". $row['id'] .")\">". $row['status'] ."</div>
            </td>
            <td>". $create_date ."</td>
            <td style=\"width: 5%;\">
            	<button class='btn-danger' onclick=\"deleteTask(". $row['id'] .")\">
            		<i class=\"fa fa-times\"></i>
            	</button>
            </td>
        </tr>";
        echo $output;
	}


	
} catch (PDOException $e) {
	
	echo "An error occurred" . $e->getMessage();

}
	






 ?>