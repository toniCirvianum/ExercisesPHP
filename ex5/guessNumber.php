<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5. Guess a number</title>
</head>
<body>

<?php
    //Inicialitzem varaibles que inidquen que no s'ha realitzat cap inteint.
    $numberToGuess = 101;
    $intents = -1; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['number'])) {
        // Actualizar el nombre a endevinar
        if (isset($_POST['numberToGuess']) && $_POST['numberToGuess'] != 101) {
            $numberToGuess = $_POST['numberToGuess'];

        } else {
            $numberToGuess = rand(0, 100);

        }

        // Actualizar el num de intents
        if (isset($_POST['intents']) && $_POST['intents'] != -1) {
            $intents = $_POST['intents'];
        } else {
            $intents = 0;
        }

        $intents++;
        
        // num de l'usuari
        $number = $_POST['number'];

        // Comparem el nomnbre
        if ($number > $numberToGuess) {
            echo "<p>El número és massa gran.</p>"; 
        } elseif ($number < $numberToGuess) {
            echo "<p>El número és massa petit.</p>"; 
        } else {
            echo "<p>Felicitats! Has endevinat el nombre en " . $intents . " intents!!!</p>"; 
            // Reiniciar el joc
            $intents = 0;
            $numberToGuess = rand(0, 100);
        }
    }
?>

<form action="" method="post">
    <label for="number">Enter a number: </label>
    <input type="number" name="number" required>
    <input type="hidden" name="numberToGuess" value="<?php echo $numberToGuess; ?>">
    <input type="hidden" name="intents" value="<?php echo $intents; ?>">
    <input type="submit" value="Send">
</form>

</body>
</html>
