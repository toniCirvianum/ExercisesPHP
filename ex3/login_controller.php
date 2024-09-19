<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['user']) && isset($_POST['password'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
        $user_valid = false;
        $password_valid = false;
        $lowerLetters = '/[a-z]/';
        $capitalLetters = '/[A-Z]/';
        $numbers = '/[0-9]/';
        $symbols = '/[!#$%&.,?<>_-€~·]/';
        //check valid user
        if (preg_match('/^[a-z0-9]+$/', $user)) {
            $user_valid = true;
        } else {
            $uswer_valid = false;
        }
        //check valdi password
        if (  
            preg_match($lowerLetters, $password) && preg_match($capitalLetters, $password)
         
        ) {
            $password_valid = true;
        } else {
            $password_valid = false;
        }
    }

    if ($user_valid) {
        echo "Ok user";
    } else {
        echo "ERROR user";
    }

    if ($password_valid) {
        echo "Ok pass";
    } else {
        echo "ERROR pass";
    }
}
