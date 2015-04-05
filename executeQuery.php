<?php 
	
	class executeQuery
	{
		//Constructor 
		function __contructor()
		{	
			//Load Error marking 
			require_once "error.php"; 

			//Set content type to json. 
			header("Content-Type: application/json"); 
		}

		//Function connects to the database. 
		function connect_db()
		{
			//Load class to connect to database. 
			require_once "Connect.php"; 

			//Create connection object. 
			$connection = new Connect();
			//Get a connection object.  
			$con = $connection->getConnection(); 
			//Return connection. 
			return $con; 
		}

		//Function executes a query. 
		function query($con, $query)
		{
			return mysqli_query($con, $query); 	
		}

		//Function takes result object and prints json format.
		function printJSON($result, $cols)
		{
			//Start printing json. 
			echo "{  \" result  \" : ["; 

			//Variable used to determine if comma should be printed between arrays. 
			$counter = 0; 

			//For each record. 
			while($row = mysqli_fetch_array($result))
			{	
				echo "{"; 

				//For each column
				for($i=0; $i<sizeof($cols); $i++)
				{
					//Print key value pair. 
					echo "\"" . $cols[$i] . "\":\"" . $row[$cols[$i]] . "\"";

					//If we are not at the last column, print a comma. 
					if($i  < sizeof($cols)-1) { echo ","; } 
				}

				echo "}"; 

				//Increment counter. 
				$counter++;

				//If we are not on the end record, print comma. 
				if($counter<mysqli_num_rows($result))
				{
					echo ","; 
				} 
			}
			//End json. 
			echo "]}"; 
		} 

	} // end class. 
?>