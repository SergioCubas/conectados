<?php
include_once '../user.php';
include_once '../db.php';


$email = $_POST['username'];
$objUser = new User();

print_r($objUser->userExists($email));


function userExists($user){
    $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
    $query->execute(['user' => $user]);

    if($query->rowCount()){
        return true;
    }else{
        return false;
    }
}
