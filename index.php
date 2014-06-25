
<?php
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'home';
}
switch ($action) {
    case 'home':
        break;
    
    case 'login':
        include('views/authenticatedUserView.php');
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

include('views/pageviews.php');
