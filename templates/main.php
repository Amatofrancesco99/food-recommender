<!-- This file contains the main page, the very first page used when the user logs in -->
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
        
        <title>Food Recommender | Main</title>
    </head>


    <body>
        <?php include("../scripts/php/handle_loading-main.php") ?>
        <?php include("sharedElements/navbars/navbar2.php") ?>

        <header id="main">
            <?php include("../scripts/php/welcome_user.php") ?>
            
            <h1 class="purple">
                What can I eat right now?
            </h1>
            <form action="recipe.php">
                <input type="submit" class="button show-recipe" value="Show recipe" name="show" id="show">
            </form>

            <?php 
                include("../scripts/php/show_random_image.php");
                $image_name = getRandomImage("../images/eat-gif");
                echo("<img src='../images/eat-gif/$image_name' class='gif'>");
            ?>
        </header>
        
        <?php include("sharedElements/footer.php") ?>

    </body>

</html>