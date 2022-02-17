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


    <body onload="hideRecipe()">
        <?php include("../scripts/php/handle_loading-main.php") ?>
        <?php include("sharedElements/navbars/navbar2.php") ?>

        <header id="main">
            <?php include("../scripts/php/welcome_user.php") ?>
            <h2 class="purple">
                What can you eat now?
            </h2>
            <form action="../scripts/php/handle_show-recipe.php" method="post">
                <input type="submit" class="button" value="Show new recipe" name="show" id="show">
            </form>
        </header>
        
        <article id="recipe">
            <div class="login-container">
                <div class="content">
                    <!-- Get a random recipe from the db -->
                </div>
            </div>
        </article>

        <?php include("sharedElements/footer.php") ?>

    </body>

</html>