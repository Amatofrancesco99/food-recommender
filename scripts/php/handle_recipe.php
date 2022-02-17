<!-- This script loads the info of a new random recipe and make some replacements on its field -->
<?php
    if(session_status() === PHP_SESSION_NONE) 
        session_start();
    require_once("../scripts/php/config.php");
    
    $query =  "SELECT id, name, aver_rate, img_url, review_nums, ingredients, cooking_directions FROM recipes ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $recipe_data = mysqli_fetch_assoc($result);
    
        $ingredients = explode("^", $recipe_data['ingredients']);

        /* The following string replacements are made in order to print better the results */
        $replaced_cooking_direction = str_replace("{'directions': u",'', $recipe_data['cooking_directions']);
        $replaced_cooking_direction = str_replace("'",'', $replaced_cooking_direction);
        $replaced_cooking_direction = str_replace("}",'', $replaced_cooking_direction);
        $replaced_cooking_direction = str_replace('\n','<br>', $replaced_cooking_direction);
        $replaced_cooking_direction = str_replace('Prep','Preparation: ', $replaced_cooking_direction); 
        $replaced_cooking_direction = str_replace('Cook','Cooking time: ', $replaced_cooking_direction); 
        $replaced_cooking_direction = str_replace('Ready In','Ready in: ', $replaced_cooking_direction);  
    }
    mysqli_close($con);
?>