
<?php

/*start a new session or resume the previous session
 * 
 */
$lifetime = 60 * 60 *  24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();

/*
 * Check if this function is being called from a post or get action by checking
 * for the presence of post or get data action flags and
 * set the action flag to 'home' if this is being called as the Apache default page.
 */

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home';
    }
}

    switch ($action) {
        case 'home':
            if (empty($_SESSION['userID'])){
                
            }
            include('views/pageviews.php');
            break;

        case 'login':
            include('views/authenicatedUserView.php');
            break;

        case 'createAccount':
            include('views/createAccountView.php');
            break;

        case 'getImages':
            include('views/previewImageView');
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
    