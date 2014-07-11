
<?php

/* start a new session or resume the previous session
 * 

 */
require_once 'utilities/main.php';


if (!isset($_SESSION['userID'])) {
    include ('views/pageviews.php');
    exit;
} else {
    include ('views/authenicatedUserView.php');
    exit;
}
  
        