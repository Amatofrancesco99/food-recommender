<?php
    session_start();
    require_once("config.php");
    
    /* The aim of this query is finding three random comments in the review table, where the username
    are not the same */
    $query =  "SELECT username, comment FROM reviews GROUP BY username ORDER BY RAND() LIMIT 3";
    $result = mysqli_query($con, $query);

    if($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo('<div class="comment">');
            echo('<q class="white">'.ucfirst((htmlspecialchars($row['comment']))).'</q>');
            $username = $row['username'];
            if ($username == NULL) {
                $username = "Anonymous";
            }
            echo('<p class="author white-pink">'.ucfirst($username).'</p>');
            echo('</div>');
        } 
    }
    mysqli_close($con);
?>