<?php
include('userlist_model.php');

if ( isset($_GET['username']) && isset($_GET['password']) && isset($_GET['rol']) ) {
    $userKey = $_GET['userKey'];
    $newUsername = $_GET['username'];
    $newPassword = $_GET['password'];
    $newRol = $_GET['rol'];

    $myUserList[$userKey]=[
        'username'=>$newUsername,
        'password'=>$newPassword,
        'rol'=>$newRol
    ];
    echo "<label class='form-label mb-3 text-info' >";
    echo "<p class='mb-3'> User Updated! </p>"; 
    print_r($myUserList);
    echo "</label>";

}