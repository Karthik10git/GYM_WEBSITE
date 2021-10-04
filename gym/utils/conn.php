<?php
class Database {
public $conn;
public $dbServername;
public $dbUsername;
public $dbPassword;
public $dbName;


  function __construct($dbServername, $dbUsername, $dbPassword, $dbName) {
  $this->dbServername = $dbServername;
  $this->dbUsername = $dbUsername;
  $this->dbPassword = $dbPassword;
  $this->dbName = $dbName;
  $this->conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );
  }
  function query($sql) {
    return mysqli_query($this->conn, $sql);
  }
  
}

$db = new Database("localhost", "root", "", "gym");

?>
