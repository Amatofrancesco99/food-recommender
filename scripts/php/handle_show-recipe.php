<?php
    if(session_status() === PHP_SESSION_NONE) 
        session_start();
    require_once("config.php");
    
    $query =  "SELECT id, name, aver_rate, img_url, review_nums, ingredients, cooking_directions FROM recipes ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) > 0) {
        echo('<!DOCTYPE html>');
            echo('<html lang="en">');
                echo('<head>');
                    echo('<meta charset="UTF-8">');
                    echo('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
                    echo('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
                    echo('<meta name="robots" content="noindex">');
                    echo('<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">');
                    echo('<link rel="stylesheet" href="../../stylesheets/style.css">');
                    echo('<title>Food Recommender | Recipe</title>');
                echo('</head>');

                echo('<body>');
                    include("../../templates/sharedElements/navbars/navbar2.php");

                    $recipe_data = mysqli_fetch_assoc($result);	
                        echo('<div class="food-content">');
                            echo('<h2 hidden>'.$recipe_data['id'].'</h2>');
                            echo('<img src="'.$recipe_data['img_url'].'" class="food">');
                            echo('<h1 class="white-pink">'.$recipe_data['name'].'</h1>');
                            echo('<h2 class="purple"> Reviews: '.$recipe_data['review_nums'].' Score: '.round($recipe_data['aver_rate'], 1).'</h2>');
                            $ingredients = explode("^", $recipe_data['ingredients']);
                            echo('<h4 class="purple"> Ingredients:</h4>');
                            echo('<p class="white">');
                                for ($i = 0; $i < count($ingredients); $i++ ){
                                    if ($i == 0) { echo (ucfirst($ingredients[$i]).', '); }
                                    else if ($i != count($ingredients) - 1) {  echo ($ingredients[$i].', '); }
                                    else { echo ($ingredients[$i].'.'); }
                                }
                            echo('</p>');
                            
                            echo('<h4 class="purple"> Cooking directions:</h4>');
                            /* The following string replacements are made in order to print better the results */
                            $replaced_cooking_direction = str_replace("{'directions': u",'', $recipe_data['cooking_directions']);
                            $replaced_cooking_direction = str_replace("'",'', $replaced_cooking_direction);
                            $replaced_cooking_direction = str_replace("}",'', $replaced_cooking_direction);
                            $replaced_cooking_direction = str_replace('\n','<br>', $replaced_cooking_direction);
                            $replaced_cooking_direction = str_replace('Prep','Preparation: ', $replaced_cooking_direction); 
                            $replaced_cooking_direction = str_replace('Cook','Cooking time: ', $replaced_cooking_direction); 
                            $replaced_cooking_direction = str_replace('Ready In','Ready in: ', $replaced_cooking_direction);             
                            echo('<p class="white">');
                                echo($replaced_cooking_direction);
                            echo('</p>');
                            echo('<form action="handle_show-recipe.php" method="post">');
                                echo('<input type="submit" class="button" value="Show another recipe" name="show" id="show">');
                            echo('</form>');
                        echo('</div>');
                    echo('</div>');

                    //Include the footer

                echo('</body>');
        echo('</html>');
    }
    mysqli_close($con);
?>