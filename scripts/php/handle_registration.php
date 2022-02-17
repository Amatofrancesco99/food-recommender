<!-- This script permits to create a new account, by checking on the db fields (for example if the
username does not already exist) -->
<?php
    if(session_status() === PHP_SESSION_NONE) 
        session_start();
    require_once("config.php");
    require_once("displayMessageAndRedirect.php");

    $email = $username = $password = $confirm_password = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = trim($_POST["email"]);

        $sql = "SELECT * FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($con, $sql)){
            $param_username = trim($_POST["username"]);
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    displayMessageAndRedirect("Username already taken.", "../../templates/registration.php");
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                displayMessageAndRedirect("Oops! Something went wrong. Please try again later.", "../../templates/registration.php");
            }
            mysqli_stmt_close($stmt);
        }
        
        $password = trim($_POST["password"]);
        
        if((!empty($email)) && (!empty($username)) && (!empty($password))){
            $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
            if($stmt = mysqli_prepare($con, $sql)){
                mysqli_stmt_bind_param($stmt, "sss", $username, $password, $email);
                if(mysqli_stmt_execute($stmt)){
                    displayMessageAndRedirect("Account successfully created.", "../../templates/login.php");
                } else{
                    displayMessageAndRedirect("Oops! Something went wrong. Please try again later.", "../../templates/registration.php");
                }
                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($con);
    }
?>