<?php
    if(session_status() === PHP_SESSION_NONE) 
        session_start();
    unset($_SESSION['username']);
    session_destroy();
    header('Location: ../../templates/index.php');
    exit;
?>