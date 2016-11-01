<?php
class Helper {
	
	private $connection;
	
	function __construct($mysqli){
	
		$this->connection=$mysqli;
	
	}
	
	/*TEISED FUNKTSIOONID*/
	
	function cleanInput($input){
		
		//Tõkestame sisestusel pahatahtlike käskude rakendumist.
		$input=trim($input);
		$input=htmlspecialchars($input);
		$input=stripslashes($input);
		
		return $input;
		
	}
	
	
}?>