<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4: Manipulating dates</title>
</head>

<body>
    <h1>Birthday countdwon</h1>
    <form action="birthday_controller.php" method='POST'>
        <p>
            <label for="date">Enter date bithday: </label>
        </p>
        <p>
            <input type="date" name="date">
        </p>
        <p>
            <input type="submit" name="option" value="Send">

        </p>
        <p>
            <?php include('birthday_controller.php') ?>
        </p>


    </form>


    

</body>

</html>