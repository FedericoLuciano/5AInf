<?php
	session_start();
	
	$_SESSION['Contatore'] = $_SESSION['Contatore']+1;
	
	echo $_SESSION['Contatore'];
	
?>