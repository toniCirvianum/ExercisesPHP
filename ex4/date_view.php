<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4: Manipulating dates</title>
</head>

<body>
    <h1>Manipulating dates</h1>
    <form action="date_view.php" method='POST'>
        <p>
            <label for="date">Enter a date</label>
        </p>
        <p>
            <input type="date" name="date">
        </p>
        <p>
            <input type="submit" name="option" value="Year">
            <input type="submit" name="option" value="Letters">
            <input type="submit" name="option" value="Days left end year">
        </p>
        <p>
            <?php include('date_controller.php') ?>
        </p>


    </form>


    

</body>

</html>