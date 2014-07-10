
<?php

/* start a new session or resume the previous session
 * 
 */
$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();

/*
 * Check if this function is being called from a post or get action by checking
 * for the presence of post or get data action flags and
 * set the action flag to 'home' if this is being called as the Apache default page.
 */
require_once 'model/database.php';

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}
if (!$action) {
    $action = 'home';
}


switch ($action) {
    case 'home':
        if (empty($_SESSION['userID'])) {
            
        }
        include ('views/pageviews.php');
        break;

    case 'login':

        include ('views/authenicatedUserView.php');
        break;

    case 'createAccount':
        header ('views/createAccountView.php');
        break;

    case 'processAccount':
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $verify_password = filter_input(INPUT_POST, 'verify_password', FILTER_SANITIZE_STRING);
        if ($password == $verify_password) {
            create_user_account();
            include ('views/authenicatedUserView.php');
        } else {
            echo('Passwords do not Match');
            include ('views/createAccountView');
        }

    case 'getImages':
        include ('views/previewImageView');
        break;

    case 'captureImage':
        break;

    case 'createOrder':
        break;

    case 'paymentProcessing':
        break;

    case 'sendOrder':
        break;

    case 'confirmOrder':
        break;

    default;
}
    