<!-- This script permits to show a message and redirect to a particular path, this function is called 
when server side problems occours (example, creating an account whose username already exists, ...) -->
<?php
    function displayMessageAndRedirect($msg, $path) {
        echo '<script type="text/javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location = "'.$path.'"';
        echo '</script>';
    }
?>