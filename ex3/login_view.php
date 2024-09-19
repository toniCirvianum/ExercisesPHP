<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
</head>
<body>
    <form action="login_controller.php" method="post">
    <p>
        <label for="user">User: </label>
        <input type="text" name="user" required>
    </p>
    <p>
        <label for="password">Password: </label>
        <input type="password" name="password" required>
    </p>
    <p>
        <input type="submit" value="Login">
    </p>

    </form>
    
</body>
</html>