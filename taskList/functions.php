<?php 

function clenup($data){
	return trim(htmlentities(strip_tags($data)));
};

?>