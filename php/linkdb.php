<?php
	$dbhost ='localhost';
	$dbuser ='root';
	$dbpassword ='';
	$dbdatabase ='trouw';
	
	$link = mysqli_Connect($dbhost , $dbuser , $dbpassword , $dbdatabase);
	
	/*Verbinding controleren*/
	if(mysqli_connect_error())
	{
		echo("connection failed!, ". mysqli_connect_error());
		exit();
	}
?>