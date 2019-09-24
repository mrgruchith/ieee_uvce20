<?php
 
    class Database{
        private $host = 'localhost';
        private $db_name = 'IEEElogin';
        private $username = 'root';
        private $password = '';
        public $conn;

        public function getConnection(){
            $this->conn = null;

            try{
                $this->conn = PDO("mysql:host=".$this->host. ";ddname=".$this->db_name,
                $this->username,$this->password);
            }catch(PDOException $exception){
                echo "Connection error:". $exception->getmessage();
            }

            return $this->conn;
        }
    }


?>