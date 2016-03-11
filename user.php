<?php
    session_start();

    if(isset($_SESSION['id'])) {
        $username = $_SESSION['username'];
        $userId = $_SESSION['id'];
        echo "Welcome, {$username}!";
    } else {
        header('Location: index.php');
        die();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome, members!</title>
    </head>
    <body>
    
        <a href="logout.php">Logout</a>
    </body>
</html>