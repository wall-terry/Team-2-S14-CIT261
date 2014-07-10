<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dsn = 'mysql:host=localhost;dbname=teamteez';
$username = 'teamteez';
$password = 'CIT261s14t#2';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $ex) {
    $message = 'Failed to Connect to Database';
    display_db_error($message);
    exit;
}

function get_name_by_userID($userID) {
    global $db;
    $query = 'SELECT  first_name, lastname FROM users
            WHERE userID = $userID';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (Exception $ex) {
        $message = 'Failed to Get Name for userID';
        display_db_error($message);
    }
}

function create_user_account($username, $email, $password){
    global $db;
    $query = 'INSERT INTO users
               (username, email, password) 
              VALUES
                (:username, :email, :password)';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
    $user_ID = $db->lastInsertId();
    return $user_ID;
    } catch (PDOException $ex){
       $message = 'Failed to Create New User';
       display_db_error($message); 
    }
  }
function check_user_login($userName, $passWord) {
  $query = 'SELECT userID
            WHERE username = :username AND password = :password'; 
  try{
  $statement = $db->prepare($query);
  $statement->bindValue(':username', $userName);
  $statement->bindValue(':password', $passWord);
  $statement->execute();
  $userID = $statement->fetch();
  return $userID;
}catch (PDOException $ex){
    $message ='Login Database Error';
    display_db_error($message);
}
}

function display_db_error($message){
    
    include  ('errors/error.php');
    exit();
}
