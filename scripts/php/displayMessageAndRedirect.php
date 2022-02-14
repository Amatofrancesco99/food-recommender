<?php
    function displayMessageAndRedirect($msg, $path) {
        echo '<script type="text/javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location = "'.$path.'"';
        echo '</script>';
    }
?>