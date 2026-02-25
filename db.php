<?php
class Database {
    private $host = "localhost";
    private $dbname = "livro_db_v2";
    private $username = "root";
    private $password = "12345678";
    private = "pdo";

    public function_ construct() {
        try{
          //código
          %this->pdo = new PDO(
            "mysql:host = ($this-> host); dbname=($this->dbname);"
            $this->username;
            $this->password;
            [
                PDO: :ATTR_ERRMODE => PDO: :ERRMODE_EXCEPTION,
                
            ]
        
          )
        }
        
    }
}