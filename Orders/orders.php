<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/database.php';
require_once '../utilities/main.php';

$upload_directory = "/user_images/";
$errors = array(1 => 'php.ini max file size exceeded',
    2 => 'html form max file size exceeded',
    3 => 'file upload was only partial',
    4 => 'no file was attached');


$allowedExts = array("gif", "jpeg", "jpg", "png", "bmp");
$temp = explode(".", $_FILES["imageFile"]["name"]);
$extension = strtolower(end($temp));
echo $temp . "   " . $extension;

if ((($_FILES["imageFile"]["type"] == "image/gif")
|| ($_FILES["imageFile"]["type"] == "image/jpeg")
|| ($_FILES["imageFile"]["type"] == "image/jpg")
|| ($_FILES["imageFile"]["type"] == "image/pjpeg")
|| ($_FILES["imageFile"]["type"] == "image/x-png")
|| ($_FILES["imageFile"]["type"] == "image/png")
|| ($_FILES["imageFile"]["type"] == "image/bmp"))
&& ($_FILES["imageFile"]["size"] < 100000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["imageFile"]["error"] > 0) {
    echo "Error: " . $_FILES["imageFile"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["imageFile"]["name"] . "<br>";
    echo "Type: " . $_FILES["imageFile"]["type"] . "<br>";
    echo "Size: " . ($_FILES["imageFile"]["size"] / 1024) . " kB<br>";
    echo "Stored in: " . $_FILES["imageFile"]["tmp_name"];
  }
  if (file_exists($upload_directory . $_FILES["imageFile"]["name"])) {
      echo $_FILES["imageFile"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["imageFile"]["tmp_name"],
      "$upload_directory" . $_FILES["imageFile"]["name"]);
      echo "Stored in: " . $upload_directory . $_FILES["imageFile"]["name"];
    }
} else {
  echo "Invalid file";
}


include '../Orders/orders_view.php';
