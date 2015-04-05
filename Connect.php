<?php

class Connect 
{
	public $con = ""; 

	private $host = "localhost"; 
	private $username = "root"; 
	private $password = ""; 
	private $db = "maintenence"; 


	function getConnection()
	{

		$con = mysqli_connect($host, $username, $password); 
		mysqli_select_db($con, $db); 

		$this->setCon($con); 

		echo "Connection Established"; 
	}


	function setCon($newCon)
	{
		$this->con = $newCon; 
	}

	function getCon()
	{
		return $this->con; 
	}


}


?>