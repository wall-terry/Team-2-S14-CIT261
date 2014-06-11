
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
        break;

    case 'createAccount':
        break;
    
    case 'browseImages':
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

include('/views/mainViews.php');
