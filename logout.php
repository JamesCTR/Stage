<?php
	session_start();

	unset($_SESSION['sidSession']);
	session_destroy();
	
	header("Location: inlog.php");
	
?>