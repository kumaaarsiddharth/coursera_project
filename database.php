<?php
class Database{
    private $dbname="course";
    private $username = "root";
    private $password = "";
    private $host = "localhost";

    public $conn;
    
    public function getConnection(){

        $this->conn = null;
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->dbname);

        if($this->conn->connect_error){
            die("Connection Failed !".$this->conn->connect_error);
        }
        else{
            return $this->conn;
        }
    }
    
}
?>