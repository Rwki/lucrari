<?php
    session_start();
    session_destroy();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>You are logged out!</title>
    </head>
    <body>
        You are logged out.<br />
    
        <a href="index.php">Login</a>
    </body>
</html>