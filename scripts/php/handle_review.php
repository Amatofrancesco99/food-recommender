<!-- This script permits to add a new comment to the db -->
<?php
    if(session_status() === PHP_SESSION_NONE) 
        session_start();
    require_once("config.php");
    require_once("displayMessageAndRedirect.php");

    $username = $message = $isAnonymous = "";
    $isExpired = false;

    if(isset($_POST['anonymous']) == ".."){
        $isAnonymous = true;
    } else {
        $isAnonymous = false;
    }
    
    if($isAnonymous) {
        $username = NULL;
    } else {
        $username = $_SESSION["username"];
    }
    
    if(!$isExpired){
        $comment = trim($_POST["comment-area"]);
        
        if(((!empty($username)) || ($username == NULL)) && (!empty($comment))){
            $sql = "INSERT INTO reviews (username, comment) VALUES (?, ?)";
            if($stmt = mysqli_prepare($con, $sql)){
                mysqli_stmt_bind_param($stmt, "ss", $username, $comment);
                if(mysqli_stmt_execute($stmt)){
                    header("Location: ../../templates/main.php");
                } else if(!mysqli_stmt_execute($stmt)){
                    displayMessageAndRedirect("Oops! Something went wrong. Please try again later.", "../../templates/registration.php");
                }
                mysqli_stmt_close($stmt);
            }
        }
    }
    mysqli_close($con);
?>