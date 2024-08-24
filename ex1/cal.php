<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        #result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            <?php if (!isset($_GET['operation'])) { echo 'display: none;'; } ?> /* Hide the result initially */
        }
    </style>
</head>
<body>
    <h1>Basic Calculator</h1>
    <form action="cal.php" method="get">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" id="number1" required step="any" value="<?php echo isset($_GET['number1']) ? htmlspecialchars($_GET['number1']) : ''; ?>">
        <br><br>
        <label for="number2">Number 2:</label>
        <input type="number" name="number2" id="number2" required step="any" value="<?php echo isset($_GET['number2']) ? htmlspecialchars($_GET['number2']) : ''; ?>">
        <br><br>
        
        <input type="submit" name="operation" value="Addition">
        <input type="submit" name="operation" value="Subtraction">
        <input type="submit" name="operation" value="Multiplication">
        <input type="submit" name="operation" value="Division">
    </form>

    <div id="result">
        <?php include 'cal_model.php'; ?>
    </div>
</body>
</html>
