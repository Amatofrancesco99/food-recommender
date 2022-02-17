<!-- This script permits to redirect to login page if the session is expired -->
<?php 
	if(session_status() === PHP_SESSION_NONE) 
        session_start();
    if (!isset($_SESSION['username'])) {
		header('Location: ../templates/login.php');
		exit;
	}
?>