<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['operation'])) {
    // Retrieve form values
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $operation = $_GET['operation'];
    $result = null;
    $error = null;

    // Perform the selected operation
    switch ($operation) {
        case "Addition":
            $result = $number1 + $number2;
            break;
        case "Subtraction":
            $result = $number1 - $number2;
            break;
        case "Multiplication":
            $result = $number1 * $number2;
            break;
        case "Division":
            if ($number2 == 0) {
                $error = "Error: Division by zero is not allowed.";
            } else {
                $result = $number1 / $number2;
            }
            break;
        default:
            $error = "Invalid operation.";
    }

    // Display the result or error
    if ($error) {
        echo "<p style='color: red;'>$error</p>";
    } else {
        echo "<p>The result of the operation is: <strong>$result</strong></p>";
    }
}
?>
