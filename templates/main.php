<!-- This file contains the main page, the very first page used when the user logs in -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <meta name="robots" content="noindex">

        <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
        <link rel="stylesheet" href="../stylesheets/style.css">

        <title>Food Recommender | You</title>
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
        </header>

        <?php include("sharedElements/footer.php") ?>

    </body>

</html>