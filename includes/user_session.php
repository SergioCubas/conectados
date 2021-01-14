<?php


class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user){   
        include_once 'user.php';
        $objUser = new User();

        setcookie('token_session', $_GET["token"], time() + 3600, '/');
        $_SESSION['user'] = $user;
        setcookie('token_session','',time()-100);
        header('Location:'."https://eventosenel.pe/");
        exit;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession($mail){
        include_once 'user.php';
        $objUser = new User();
        unset($_COOKIE['token_session']); 

        $objUser->sessionDelete($_SERVER['REMOTE_ADDR'], $mail);

        session_unset();
        session_destroy();
    }
}
