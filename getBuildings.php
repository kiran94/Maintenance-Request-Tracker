<?php
	
	include "executeQuery.php"; 

	$execute = new executeQuery(); 

	$con = $execute->connect_db(); 

	$query = "SELECT building_name FROM Building"; 
	$result = $execute->query($con, $query); 

	$cols = ["building_name"]; 

	$execute->printJSON($result, $cols); 
?>