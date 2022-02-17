<?php
    if(session_status() === PHP_SESSION_NONE) 
        session_start(); 
    if (isset($_SESSION['username'])) {
        if (!isset($_SESSION['already_welcome'])) {
            $_SESSION['already_welcome'] = false;
        }
        if (!($_SESSION['already_welcome'])) {
            echo '<script type="text/javascript">',
             'Swal.fire("Welcome back '.$_SESSION['username'].'", "It\'s appreciated if you leave a review after trying this app", "success")',
             '</script>';
             $_SESSION['already_welcome'] = true;
        }
	}
?>