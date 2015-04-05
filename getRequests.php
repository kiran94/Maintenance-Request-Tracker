<?php
	
	//Include class to query database. 
	include "executeQuery.php"; 

	//Create a new object to make query. 
	$execute = new executeQuery(); 

	//Connect to database. 
	$con = $execute->connect_db(); 

	//Create Query. 
	$query = "SELECT * from request";
	//Execute Query.  
	$result = $execute->query($con, $query); 

	//Set cols to get. 
	$cols = ["reqlabel", "building_id", "room_id"]; 

	//Print results in JSON format. 
	$execute->printJSON($result, $cols); 

	
?>