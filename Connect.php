<?php

class Connect 
{
	//Variable holds connection 
	private $con = ""; 

	//Holds credentials to database. 
	private $host = "localhost"; 
	private $username = "root"; 
	private $password = ""; 
	private $db = "maintenence"; 

	//Function creates connection to the database. 
	function getConnection()
	{
		//Make a connection to mysql. 
		$con = mysqli_connect($this->host, $this->username, $this->password); 
		//select the database. 
		mysqli_select_db($con, $this->db); 

		//Set the class variable to the connection. 
		$this->setCon($con); 

		return $con; 

		//echo "Connection Established"; 
	}

	//Setter for con. 
	function setCon($newCon)
	{
		$this->con = $newCon; 
	}

	//Getter for con. 
	function getCon()
	{
		return $this->con; 
	}
}

?>