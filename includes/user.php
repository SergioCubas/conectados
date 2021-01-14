<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $email;


    public function updatetUser($user, $token){
        date_default_timezone_set("America/Lima"); 

        $query = $this->connect()->prepare("UPDATE usuarios SET token = '".$token."',  upd_date = '".date('Y-m-d H:i:s')."'  WHERE email = :email");
        $query->execute(['email' => $user]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function insertUser($nombre, $apellido, $email, $token){
        date_default_timezone_set("America/Lima"); 

        $query = $this->connect()->prepare("INSERT INTO usuarios (nombre, apellido, email, token, ip, reg_date, upd_date) VALUES ('".$nombre."', '".$apellido."', '".$email."','".$token."', '".$_SERVER['REMOTE_ADDR']."', '".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."');");

        $query->execute();

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function userExists($user){
        date_default_timezone_set("America/Lima"); 

        $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE email = :user");
        $query->execute(['user' => $user]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    	
    public function validateUser($user, $password){
        date_default_timezone_set("America/Lima"); 

        $result = "";
        $query = "SELECT id FROM usuarios WHERE email = '".$user."' and password = '".$password."'";
        foreach ($this->connect()->query($query) as $row) {
            $result = $row['id'];
        }
        return print_r($result);
    }

    public function timeToken($token){
        date_default_timezone_set("America/Lima"); 
        $tokenTime = "";

        $query = "SELECT upd_date FROM usuarios WHERE password_key = '".$token."'";
        foreach ($this->connect()->query($query) as $row) {
            $tokenTime = $row['upd_date'];
        }
        return $tokenTime;
    }

    public function tokenExists($token){
        date_default_timezone_set("America/Lima"); 

        $idUser = "";
        $query = $this->connect()->prepare("SELECT id FROM usuarios WHERE token = '".$token."'");
        $query->execute();

        if($query->rowCount()){
            return "true";
        }else{
            return "false";
        }
    }

    public function tokenDelete($token){
        date_default_timezone_set("America/Lima"); 

        $idUser = "";
        $query = "SELECT id FROM usuarios WHERE password_key = '".$token."'";

        foreach ($this->connect()->query($query) as $row) {
            $idUser = $row['id'];
        }

        $query = $this->connect()->prepare("UPDATE usuarios SET password_key = '' WHERE id = :id");
        $query->execute(['id' => $idUser]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function changePassword($email, $password){
        date_default_timezone_set("America/Lima"); 

        $idUser = "";
        $query = "SELECT id FROM usuarios WHERE email = '".$email."'";

        foreach ($this->connect()->query($query) as $row) {
            $idUser = $row['id'];
        }
        $query = $this->connect()->prepare("UPDATE usuarios SET password = '".md5($password)."' WHERE id = :id");
        $query->execute(['id' => $idUser]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function getUserIp($token){
        $ip = "";
        $query = "SELECT ip FROM usuarios WHERE password_key = '".$token."'";

        foreach ($this->connect()->query($query) as $row) {
            $ip = $row['ip'];
        }
        return $ip;
    }


    public function sessionInsert($email, $ipSession, $token){
        date_default_timezone_set("America/Lima"); 
        $date = date('Y-m-d H:i:s');
        $ip = "";
        $query = "SELECT id, ip, token FROM usuarios WHERE email = '".$email."'";

        foreach ($this->connect()->query($query) as $row) {
            $id = $row['id'];
            $ipSession = $row['ip'];
            $token = $row['token'];
        }

        $validateIp = "SELECT id FROM session WHERE ip = '".$ipSession."' AND token = '".$token."'";

        foreach ($this->connect()->query($validateIp) as $row) {
            $ip = $row['id'];
        }

        if($ip == ""){
            $date = date('Y-m-d H:i:s');
            $query = $this->connect()->prepare("INSERT INTO session (ip, token, idUsuario, estado, reg_date, upd_date) VALUES ('".$ipSession."', '".$token."', ".$id.",'Login','".$date."','".$date."');");
            $query->execute();
        }else{
            $date = date('Y-m-d H:i:s');

            $query = $this->connect()->prepare("UPDATE session SET upd_date = '".$date."', estado = 'Login' WHERE idUsuario = ".$id." AND  ip = '".$ipSession."' AND token = '".$token."'");
            $query->execute();
        }


    }

    public function sessionDelete($ipSession, $user){
        date_default_timezone_set("America/Lima"); 

        $user = "SELECT id, ip FROM usuarios WHERE email = '".$user."'";

        foreach ($this->connect()->query($user) as $row) {
            $userId = $row['id'];
            $ipSession = $row['ip'];
        }
        
        $sessionId = "SELECT id FROM session WHERE ip = '".$ipSession."' and estado = 'Login' and idUsuario = ".$userId;

        foreach ($this->connect()->query($sessionId) as $row) {
            $id = $row['id'];
        }

        $query = $this->connect()->prepare("UPDATE session SET upd_date = '".date('Y-m-d H:i:s')."', estado = 'Logout' WHERE id = :id");
        $query->execute(['id' => $id]);
    }

    public function countSession($user){
        $sessionId = "SELECT id FROM usuarios where email = '".$user."'";
        foreach ($this->connect()->query($sessionId) as $row) {
            $id = $row['id'];
        }
        $countSession = "SELECT count(*) FROM session where idUsuario = ".$id." AND estado = 'Login'";
        foreach ($this->connect()->query($countSession) as $row) {
            $count = $row['count(*)'];
        }
        return $count;
    }

    public function deleteFirstSession($user){
        date_default_timezone_set("America/Lima"); 

        $arraySession = [];
        
        $sessionId = "SELECT id FROM usuarios where email = '".$user."'";
        foreach ($this->connect()->query($sessionId) as $row) {
            $id = $row['id'];
        }

        $sessionId = "SELECT id FROM session where idUsuario = ".$id;
        foreach ($this->connect()->query($sessionId) as $row) {
            $id = $row['id'];
            array_push($arraySession,$id);
        }

        $query = $this->connect()->prepare("UPDATE session SET estado = 'Logout' WHERE id = :id");
        $query->execute(['id' => $arraySession[0]]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function changeStateLogin($ip){
        date_default_timezone_set("America/Lima"); 

        $query = $this->connect()->prepare("UPDATE session SET estado = 'Login' WHERE ip = :ip");
        $query->execute(['ip' => $ip]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function validateSession($email){
        date_default_timezone_set("America/Lima"); 

        $arrayUserId = [];
        $query = "SELECT id FROM usuarios WHERE email = '".$email."'";

        foreach ($this->connect()->query($query) as $row) {
            $id = $row['id'];
            array_push($arrayUserId, $id);
        }

        $sessionId = "SELECT count(*) FROM session where idUsuario = ".$arrayUserId[0];

        foreach ($this->connect()->query($sessionId) as $row) {
            $id = $row['count(*)'];
        }
        return $id;
    }

    public function setUser($user){
        date_default_timezone_set("America/Lima"); 

        $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE email = :user");
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->email = $currentUser['email'];
        }
    }


    public function getEmail($token){
        date_default_timezone_set("America/Lima"); 

        $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE password_key = :token");
        $query->execute(['token' => $token]);
        
        foreach ($query as $currentUser) {
            $this->email = $currentUser['email'];
        }
        
        return $this->email;
    }

    public function getNombre(){
        date_default_timezone_set("America/Lima"); 

        // $this->sessionInsert($this->email, $_SERVER['REMOTE_ADDR'], "");
        return $this->email;
    }
    
}
