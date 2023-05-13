<?php
  abstract class People
  {
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "abstract";

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        // $dis=("CREATE DATABASE IF NOT EXISTS")
        // $this->conn->query($dis);
    }
  
  abstract public function data(): string;
  }
    class Datab extends People
    {
       public function data(): string
       {
        $dbname = "CREATE DATABASE IF NOT EXISTS $this->dbname";

      return  $this->conn->query($dbname);
       }
    }
  $new = new Datab();
  $new->data();
?>