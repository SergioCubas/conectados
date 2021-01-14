<?php
include_once '../user.php';
$objUser = new User();

$email = $_POST['email'];
$password = $_POST['password'];

$objUser->changePassword($email,$password);
