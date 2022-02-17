<!-- This file contains the page that permits to create a new user -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <meta name="robots" content="noindex">

        <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
        <link rel="stylesheet" href="../stylesheets/style.css">

        <script src="../scripts/javascript/functions.js"></script> 
        
        <title>Food Recommender | Registration</title>
    </head>


    <body>
        <?php include("sharedElements/navbars/navbar1.php") ?>
        
        <header id="default">
            <div class="login-container">
                <div class="content2">
                    <img src="../images/logo.png" class="logo">
                    <h1 class="purple">REGISTER</h1>
                    <form onsubmit="return validRegistrationForm();" action="../scripts/php/handle_registration.php" method="post">
                        <input type="email" class="rounded-input" id="email" name="email" placeholder="Email" required><br><br>
                        <input type="text" class="rounded-input" id="username" name="username" placeholder="Username" required><br><br>
                        <input type="password" class="rounded-input" id="password" name="password" placeholder="Password" required><br><br>
                        <input type="password" class="rounded-input" id="confirm-password" name="confirm-password" placeholder="Confirm password" required><br><br>
                        <input type="submit" value="Register" name="register" class="button">
                    </form>
                </div>
            </div>
        </header>

        <?php include("sharedElements/footer.php") ?>
        
    </body>

</html>