<?php

include('userlist_model.php');

if (isset($_GET['username']) && isset($_GET['password']) && isset($_GET['rol'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $rol = $_GET['rol'];

    $newuser = ['username' => $username, 'password' => $password, 'rol' => $rol];
    if (array_push($myUserList, $newuser)) {
        echo "<label class='form-label mb-3 text-success' >";
        echo "User added!!";
        echo "</label>";
    } else {
        echo "<label class='form-label mb-3 text-danger' >";
        echo "Error!!";
        echo "</label>";
    }
    echo "<label class='form-label mb-3 text-info' >";
    print_r($myUserList);
    echo "</label>";
}
