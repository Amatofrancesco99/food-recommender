<?php 
	if(session_status() === PHP_SESSION_NONE) 
		session_start();
    if (isset($_SESSION['username'])) {
		header('Location: ../templates/main.php');
		exit;
	}
?>