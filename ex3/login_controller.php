<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['user']) && isset($_POST['password'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
        $user_valid = false;
        $password_valid = false;
        $user_regex = '/^[a-z0-9]{1,15}/';
        $password_regex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,16}$/';
       
        //check valid user
        if (preg_match($user_regex, $user)) {
            $user_valid= true;
        } else {
            header('Location: login_view.php?error=1');
            exit();
        }
        //check valdi password
        if (preg_match($password_regex,$password)) {
                $password_valid = true;
        } else {
            header('Location: login_view.php?error=1');
            exit();
        }

        if ($user_valid && $password_valid) {
            $user_correct='admin';
            $password_correct='P@ssw0rd';
            if ($user === $user_correct && $password === $password_correct) {
                $_SESSION['username'] = $user;
                header ("Location: user_page.php");
                exit();
            }
        } else {
            header('Location: loginOk_view.php?error=1');
        }

    }



    
}
