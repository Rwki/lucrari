<?php
    session_start();

    if (isset($_POST['submit'])) {
        include("connection.php"); 
        $username = strip_tags($_POST['name']);
        $password = strip_tags($_POST['password']);
        
        $sql = "SELECT id, username, password FROM members WHERE username = '$username' AND activated = '1' LIMIT 1";
        
        $query = mysqli_query($dbCon, $sql); 
         if ($query) {
            $row = mysqli_fetch_row($query); 
            $userId = $row[0];
            $dbUsername = $row[1];
            $dbPassword = $row[2];
           
         }
        if ($username == $dbUsername && $password == $dbPassword) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $userId;
            header('Location: user.php');
        } else {
            echo "Incorrect Password";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP / MySQL Login System</title>
    </head>
    <body>
        <h1>Login System</h1>
        <form method="post" action="index.php">
            <input type="text" name="name" placeholder="Name" /><br />
            <input type="text" name="password" placeholder="Password" /><br />
            <input type="submit" name="submit" value="Login" />
        
        </form>
    
    </body>

</html>