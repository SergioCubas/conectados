<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        /*$this->host     = 'localhost';
        $this->db       = 'bd_bess';
        $this->user     = 'scubas';
        $this->password = "oudd4j6ybg2schpp";
        $this->charset  = 'utf8mb4';*/

        $this->host     = 'db-mysql-produccion-do-user-7624362-0.b.db.ondigitalocean.com:25060';
        $this->db       = 'conectados_db';
        $this->user     = 'scubas';
        $this->password = "oudd4j6ybg2schpp";
        $this->charset  = 'utf8mb4';
    }

    function connect(){
    
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;

            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO('mysql:host=db-mysql-produccion-do-user-7624362-0.b.db.ondigitalocean.com:25060;dbname=conectados_db','scubas','oudd4j6ybg2schpp');

            //$pdo = new PDO($connection, $this->user, $this->password, $options);
            
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}