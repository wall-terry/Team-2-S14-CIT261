
<?php

/* start a new session or resume the previous session
 * 
 */
require_once 'model/database.php';
require_once 'utilities/main.php';


if (!isset($_SESSION['userID'])) {

    include ('views/pageviews.php');
    
   
} else {
    $userID = $_SESSION['userID'];

    include ('views/authenicatedUserView.php');
   
}
  
        