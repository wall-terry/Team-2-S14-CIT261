<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/database.php';

$user_name = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
$user_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$userID = check_user_login($user_name, $user_password); 
if (isset($userID)){
    $_SESSION['userID'] = $userID;
    include '../views/authenticatedUserView.php';
    exit();
} else {
    include '../views/pageviews.php';
    exit();
}

