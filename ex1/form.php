<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1 Simple Form</title>
</head>
<body>
    <h1>Please input your name</h1>
    <form action="" method="GET">
        <input type="text" name="name" >
        <input type="submit" value="Submit Name">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['name'])) {
            $name = $_GET['name'];
            echo "<p> Hello $name! </p>";
        }
    ?>
    
</body>
</html>