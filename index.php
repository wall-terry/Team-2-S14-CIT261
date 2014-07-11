
<?php

/* start a new session or resume the previous session
 * 
 */
require_once 'utilities/main.php';


if (!isset($_SESSION['userID'])) {
    include ('views/pageviews.php');
   
} else {
    $userID = $_SESSION['userID'];
    $user_data = get_user_from_userID($userID);
    $_SESSION['username'] = $user_data['username'];
    $_SESSION['first_name'] = $user_data['first_name'];
    $_SESSION['last_name'] = $user_data['last_name'];
    include ('views/authenicatedUserView.php');
   
}
  
        