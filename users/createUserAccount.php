<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/database.php';
require_once '../utilities/main.php';

$user_name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$user_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$user_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$verify_password = filter_input(INPUT_POST, 'verify_password', FILTER_SANITIZE_STRING);

if ($user_password == $verify_password) {

    $userID = create_user_account($user_name, $user_email, $user_password);
    $_SESSION['userID'] = $userID;
    $_SESSION['username'] = $user_name;
   

    include '../views/authenicatedUserView.php';
    

            
} else {
    include '../views/createAccountView.php';
    echo 'Passwords do not match.';
}