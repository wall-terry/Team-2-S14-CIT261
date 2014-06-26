
<?php

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
    