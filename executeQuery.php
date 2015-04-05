<?php 
	
	class executeQuery
	{
		function __contructor()
		{	
			//Load Error marking 
			require_once "error.php"; 

			header("Content-Type: application/json"); 
		}

		function connect_db()
		{
			//Load class to connect to database. 
			require_once "Connect.php"; 
			
			$connection = new Connect(); 
			$con = $connection->getConnection(); 
			return $con; 
		}

		
		function query($con, $query)
		{

			return mysqli_query($con, $query); 
			
		}

		function printJSON($result, $cols)
		{
			//Set cols to get. 
			//$cols = ["reqlabel", "building_id", "room_id"]; 

			//Start printing json. 
			echo "{  \" result  \" : ["; 

			$counter = 0; 

			//For each record. 
			while($row = mysqli_fetch_array($result))
			{
				echo "{"; 

				for($i=0; $i<sizeof($cols); $i++)
				{

					echo " \"" . $cols[$i] . "\" : \"" . $row[$cols[$i]] . "\"";

					if($i  < sizeof($cols)-1)
					{
						echo ","; 
					} 
				}

				echo "}"; 

				$counter++;

				if($counter<mysqli_num_rows($result))
				{
					echo ","; 
				} 

			}

			echo "]}"; 
		}

	}

?>