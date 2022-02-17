<!-- This script permits to say welcome to user if has logged in, and the session has just been created -->
<?php
    if(session_status() === PHP_SESSION_NONE) 
        session_start(); 
    if (isset($_SESSION['username'])) {
        if (!isset($_SESSION['already_welcome'])) {
            $_SESSION['already_welcome'] = false;
        }
        if (!($_SESSION['already_welcome'])) {
            if($_SESSION['login_counter'] == 1) {
                echo '<script type="text/javascript">',
                'Swal.fire("Welcome '.ucfirst((htmlspecialchars($_SESSION['username']))).'", "It\'s appreciated if you leave a review after trying this app.", "success")',
                '</script>';
            } else {
                echo '<script type="text/javascript">',
                'Swal.fire("Welcome back '.ucfirst((htmlspecialchars($_SESSION['username']))).'", "It\'s a pleasure having you there once again.", "success")',
                '</script>';
            }
            $_SESSION['already_welcome'] = true;
        }
	}
?>