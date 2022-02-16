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
        <?php include("sharedElements/navbars/navbar2.php") ?>

        <header id="main">
            <h1 class="purple">
                What can I eat now?
            </h1>
            <form action="../scripts/php/handle_show-receipe.php" method="post">
                    <input type="submit" class="button" value="Show receipe" name="show" id="show">
            </form>
        </header>

        <?php include("sharedElements/footer.php") ?>

    </body>

</html>