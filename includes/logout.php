<?php

    include_once 'user_session.php';

    $userSession = new UserSession();
    $userSession->closeSession($_GET["email"]);

    header("location: ../");