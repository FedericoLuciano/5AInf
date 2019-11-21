<?php
	session_start();
	
	echo $_SESSION['idUtente'];
	
	session_destroy();
?>