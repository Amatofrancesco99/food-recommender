<?php    
    session_start();
	require_once("../../scripts/php/config.php");

    $row = 1;
    $row_error = array();
    if (($handle = fopen("../recipes.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle)) !== FALSE) {
            if (($row > 1) && ($row % 2 == 0)) {
                $sql = "INSERT INTO recipes (id, name, aver_rate, img_url, review_nums, ingredients, cooking_directions, nutritions, reviews) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                if($stmt = mysqli_prepare($con, $sql)){
                    mysqli_stmt_bind_param($stmt, "isdsissss", $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8].chr(34));
                    if(!mysqli_stmt_execute($stmt)){
                        array_push($row_error, $data[0]);
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