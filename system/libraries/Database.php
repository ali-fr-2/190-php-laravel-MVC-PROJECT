<?php

class Database
{
    private $host = DB_HOST;
    private $dbname = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';

        try{
            $this->dbh=new PDO($dsn,$this->user,$this->pass);
            $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        }catch(PDOException $e){
            $this->error=$e->getMessage();
            echo $this->error;
        }
    }
}
