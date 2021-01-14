<?php
include_once '../user.php';
include_once '../db.php';


$email = $_POST['email'];
$objUser = new User();

print_r($email);
// if($objUser->validateSession($user->getNombre()) > 2){
//     $objUser->deleteFirstSession($user->getNombre());
// }