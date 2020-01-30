<?php
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', '5ainf');
	
	$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	if($con->connect_errno){
		$codice = $con->connect_errno;
		$descErrore = $con->connect_errno;
		die("Errore di connessione: $codice - $codErrore");
	}
	
	$con -> set_charset("utf-8");
?>