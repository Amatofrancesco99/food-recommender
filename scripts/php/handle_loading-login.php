<!-- This script permits to redirect to main page if the user is already logged in and his/her session
isn't already expired -->
<?php 
	if(session_status() === PHP_SESSION_NONE) 
		session_start();
    if (isset($_SESSION['username'])) {
		header('Location: ../templates/main.php');
		exit;
	}
?>