
<?php

/* start a new session or resume the previous session
 * 
 */
$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();

if (!isset($_SESSION['userID'])) {
    include 'views/pageviews.php';
} else {
    include 'views/authenticatedUserView.php';
}

