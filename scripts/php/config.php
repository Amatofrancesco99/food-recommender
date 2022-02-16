<?php    
    /* Change this coordinates if you are interested on using a different MySQL database, located in another
       "position" (example: another account, or an online database) */
    $host = "localhost";
    $user = "root";
    $password = "root";
    $dbname = "food_recommender";
    $con = mysqli_connect($host, $user, $password,$dbname);
?>