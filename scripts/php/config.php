<?php    
    $host = "sql11.freesqldatabase.com";
    $user = "sql11472048";
    $password = "EpBtK2wiRH";
    $dbname = "sql11472048";

    $con = mysqli_connect($host, $user, $password,$dbname);
    
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>