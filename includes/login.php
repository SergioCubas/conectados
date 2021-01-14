<?php
include 'db.php';
include 'user_session.php';

$objSession = new UserSession();
$objBd = new DB();

if (isset($_POST['username'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $objBd->connect()->prepare("SELECT * FROM usuarios WHERE username = :username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (md5($password) ==  $result['password']) {
            $objSession->setCurrentUser($result['username']);
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            setcookie('error', "Correo o contraseña incorrecto", time() + 10, '/');
            header("Location: https://eventosenel.pe/");
            exit;
        }
    }
}