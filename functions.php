<?php

	require("../../config.php");
	
	
	//ühendus
	$database="if16_karlkruu";
	$mysqli=new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
	require("User.class.php");
	$User=new User($mysqli);
	
	require("Interest.class.php");
	$Interest=new Interest($mysqli);
	
	require("Car.class.php");
	$Car=new Car($mysqli);
	
	require("Helper.class.php");
	$Helper=new Helper($mysqli);
	
	
	//see fail peab olema kõigil lehtedel kus tahan kasutada SESSION muutujat
	session_start();
	

?>