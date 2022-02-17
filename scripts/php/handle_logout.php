<!-- This script handle the logout process, so it destroy the session and all its variables and then
redirects to index page -->
<?php
    if(session_status() === PHP_SESSION_NONE) 
        session_start();
    unset($_SESSION);
    session_destroy();
    header('Location: ../../templates/index.php');
    exit;
?>