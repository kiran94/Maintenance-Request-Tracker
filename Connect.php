<?php

class Connect 
{
	private $con; 

	private $host = "localhost"; 
	private $username = "root"; 
	private $password = ""; 
	private $db = "maintenence"; 


	public getConnection()
	{

		$con = mysql_connect($host, $username, $password, $db); 
		$this->setCon($con); 

		echo "Connection Established"; 
	}


	private setCon($newCon)
	{
		$this->$con = $newCon; 
	}

	public getCon()
	{
		return $this->$con; 
	}
}


?>