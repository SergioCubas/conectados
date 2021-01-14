<?php
include_once '../user.php';
include_once '../db.php';


$email = "sergio.cubas.b@gmail.com";
$ip = $_SERVER['REMOTE_ADDR'];

$objUser = new User();


if($objUser->userExists($email)){
   print_r($objUser->countSession($email)); 
}