<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$doc_root = filter_input(INPUT_SERVER,'DOCUMENT_ROOT');
/*
require_once ($doc_root . '/model/databasephp');
*/
$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();

if (!isset($_SESSION['userID'])) {
    global  $doc_root;
    include  'views/pageviews.php';
    exit;
}