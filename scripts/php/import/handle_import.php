<?php    
    session_start();
	require_once("../config.php");
	require_once("../displayMessageAndRedirect.php");

    $row = 1;
    $row_error = array();
    if (($handle = fopen("../../../dataset/recipes.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle)) !== FALSE) {
            if ($row > 1) {
                $num = count($data);
                $fields = array();
                for ($c=0; $c < $num; $c++) {
                    $fields[$c] = $data[$c];
                }
                $sql = "INSERT INTO users (id, name, aver_rate, image_url, review_nums, ingredients, cooking_directions, nutritions, reviews) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                if($stmt = mysqli_prepare($con, $sql)){
                    mysqli_stmt_bind_param($stmt, "isdsissss", $fields[0], $fields[1], $fields[2], $fields[3], $fields[4], $fields[5], $fields[6], $fields[7], $fields[8]);
                    if(!mysqli_stmt_execute($stmt)){
                        array_push($row_error, $row);
                    }
                    mysqli_stmt_close($stmt);
                }
            }
            $row++;
        }
        fclose($handle);
    }
    mysqli_close($con);
    echo($row_error);
?>