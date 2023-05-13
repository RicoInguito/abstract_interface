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
        $this->conn = new mysqli($this->servernam, $this->username, $this->password);
        // $dis=("CREATE DATABASE IF NOT EXISTS")
        // $this->conn->query($dis);
    }
    abstract public function data(): string;
  

    class Datab extends People
    {
      $dbname = "CREATE DATABASE IF NOT EXISTS $this->dbnam";

      return  $this->conn->query($dbname);
    }
  }
  $new = new data();
  $new->Datab();
?>