<?php

class DBController
{
    private $conn = null;
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "mobile";

}

function __construck()
{
    $this->connectDB();
}

function connectDB(){


    try {
        $this->conn = new PDO("mysqli:host={$this->host}
        dbname={$this->database}; charset=utf8",$this->user; $this->password);
        $this->cpnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION)
    } catch (PDOExeption $err) {
        die("coonection failed " . $err->getMessage());
    }

    function executeSelectWuery($query, $params[])
    {

        try {
            $stmt=$this->conn->prepare($query);
            $stmt->exe($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } 
        catch (PDOExeption $err)
        {
            die("Query Failed" . $err->getMessage());    
        }
    }

    function closeDB()
    {
        $this->conn=null;
    }
}   

?>