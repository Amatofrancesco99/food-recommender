<!-- This file contains the login page -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css">
        <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
        <link rel="stylesheet" href="../stylesheets/style.css">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <script src="../scripts/javascript/functions.js"></script> 
        
        <title>Food Recommender | Login</title>
    </head>


    <body>
        <?php include("../scripts/php/handle_loading-login.php") ?>
        <?php include("sharedElements/navbars/navbar1.php") ?>
        
        <header id="default">
            <div class="login-container">
                <div class="content2">
                    <img src="../images/logo.png" class="logo">
                    <h1 class="purple">LOGIN</h1>
                    <form onsubmit="return validLoginForm();" action="../scripts/php/handle_login.php" method="post">
                        <input type="text" class="rounded-input" id="username" placeholder="Username" name="username" required><br><br>
                        <input type="password" class="rounded-input" id="password" placeholder="Password" name="password" required><br><br>
                        <input type="submit" class="button" value="Login" name="login" id="login">
                    </form>
                    <small>
                        <br><em class="smaller">Still not a member?</em>
                        <a href="registration.php"><button class="button spaced" role="button">Register</button></a>
                    </small>   
                </div>
            </div>
        </header>

        <?php include("sharedElements/footer.php") ?>
        
    </body>

</html>