<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database {
    private $dsn = 'mysql:host=teezthemoment.com;dbname=teamteez';
    private $username = 'teamteez';
    private $password = 'CIT261s14t#2';
    
}

function get_name_by_userID($userID){  
    $query = 'SELECT  first_name, lastname FROM users
            WHERE userID = $userID';           
}

function build_database(){
  $query = 'CREATE TABLE [IF NOT EXISTS] users 
          { userID      INT     NOT NULL    UNIQUE,
            username    VARCHAR(60) NOT NULL,
            email       VARCHAR(255) NOT NULL,
            password    VARCHAR(60) NOT NULL,
            verified    BOOLEAN(60) NOT NULL,
            role        VARCHAR(15) NOT NULL,
            address     INT(11),
            first_name  VARCHAR(60),
            last_name   VARCHAR(60),
            
            }';
}