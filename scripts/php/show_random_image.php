<!-- This script returns the name of a file contained in a specific folder, randomly -->
<?php
    function getRandomImage($dir_path){
        chdir($dir_path);
        $dir_path = getcwd().'/';
        if(!empty($dir_path)){
            $files = scandir($dir_path);
            $count = count($files);
            if($count > 2){
                $index = rand(1, ($count-1));
                $filename = $files[$index];
                return $filename;
            } 
        }
    }
?>