<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/database.php';

$user_name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$user_eamil = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$user_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$verify_password = filter_input(INPUT_POST, 'verify_password', FILTER_SANITIZE_STRING);

echo "user_name = $user_name <br>"
    . "user_email = $user_eamil <br>"
    . "user_password = $user_password <br>"
    . "verify_password = $verify_password <br>";
        
if ($user_password == $verify_password){
    create_user_account($user_name, $user_email, $user_password);
    include '../views/authenticatedUserView.php';
    exit();
} else {
    include '../views/createAccountView.php';
    exit();
}