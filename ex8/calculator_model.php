<?php

//check the form
if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operation'])) {
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];
    $operation = $_GET['operation'];
    $error=false;

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '%':
            $result = $num1 % $num2;
            break;

        default:
            $error=true;
            break;
    }

    if ($error) {
        echo "<label class='form-label'> Invalid operations </label>";
    }
    else {
        echo "<label class='form-label'> The result is: <b> $result </br> </label>";
    }
}
  
