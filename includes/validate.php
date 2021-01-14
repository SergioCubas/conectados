<?php
date_default_timezone_set("America/Lima"); 
include_once 'user.php';
include_once 'mailer.php';

$objUser = new User();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$token = md5(rand(5, 10));

if($objUser->userExists($email) == 1){

    $objUser->updatetUser($email, $token);
    header("Location: https://eventosenel.pe/view/home.php?token=".$token."&mail=".$email);
    print_r("holix");

}else{
    $objUser->insertUser($nombre, $apellido, $email, $token);
    header("Location: https://eventosenel.pe/view/home.php?token=".$token."&mail=".$email);
}

function cookieValidate($name, $value){
    return setcookie($name, $value, time() + 3600, '/');
}

