<!-- This file contains the recipe page, which shows a recipe info -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="robots" content="noindex">

        <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
        <link rel="stylesheet" href="../../stylesheets/style.css">

        <title>Food Recommender | Recipe</title>
    </head>


    <body>
        <?php include("sharedElements/navbars/navbar2.php"); ?>
        <!-- When loading the page a new recipe is taken from the database -->
        <?php include("../scripts/php/handle_recipe.php"); ?>

        <div class="food-content">
            <?php echo('<h2 hidden>'.$recipe_data['id'].'</h2>'); ?>
            <?php echo('<img src="'.$recipe_data['img_url'].'" class="food">'); ?>
            <?php echo('<h1 class="white-pink">'.$recipe_data['name'].'</h1>'); ?>
            <?php echo('<h2 class="purple"> Reviews: '.$recipe_data['review_nums'].' Score: '.round($recipe_data['aver_rate'], 1).'</h2>'); ?>
            <h4 class="purple"> Ingredients:</h4>
            <p class="white">
                <?php 
                    for ($i = 0; $i < count($ingredients); $i++ ){
                        if ($i == 0) { echo (ucfirst($ingredients[$i]).', '); }
                        else if ($i != count($ingredients) - 1) {  echo ($ingredients[$i].', '); }
                        else { echo ($ingredients[$i].'.'); }
                    }
                ?>
            </p>
            <h4 class="purple"> Cooking directions:</h4>           
            <p class="white">
                <?php echo($replaced_cooking_direction); ?>
            </p>
            <form action="recipe.php" method="post">
                <input type="submit" class="button" value="Show another recipe" name="show" id="show">
            </form>
        </div>
        
        <?php include("sharedElements/footer.php"); ?>
    </body>
</html>