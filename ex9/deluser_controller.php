<?php
include('userlist_model.php');

if (isset($_GET['username'])){
    $userToDel = $_GET['username'];
    
    
    foreach ($myUserList as $key => $user) {
        if ($user['username'] === $userToDel) {
            unset($myUserList[$key]);
            break; // We exit the loop once we find and delete the user
        }
    }
    
    echo "<label class='form-label mb-3 text-danger' >";
    echo "<p class='mb-3'> User Deleted! </p>";
    echo "<pre>";
    print_r($myUserList);
    echo "</pre>";
    echo "</label>";
}



?>