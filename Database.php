<?php

class Database{

    //propaties
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "test_oop";

    public $conn;

    public function __construct(){
        //create the connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
    
    

    //check the connection

    if ($this->conn->connect_error) {
        die("connection error: ".$this->conn->connect_error);
    }else
    
    return $this->conn;
    
    }

}

?>