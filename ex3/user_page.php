<?php

session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login_view.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ok</title>
</head>
<body>
    <h1> User page</h1>
    <h2> Welcome user <? echo $_SESSION['username'] ?></h2>
    <p>
        <a href="user_logout.php">Sortir</a>
    </p>
    
</body>
</html>