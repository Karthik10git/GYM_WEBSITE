<?php
include('conn.php');

$uname = $_GET['username'];
$pass = $_GET['password'];

if (empty(trim($uname))) {
  echo "Please fill out the username filed";
  die();
}
if (empty(trim($pass))) {
  echo "Please fill out the password filed";
  die();
}

$sql = "INSERT INTO logintb (username, password) VALUES ('$uname', '$pass')";

$result = $db->query($sql);

echo "Created successfully, plz <a href='../login.php' > login</a>";
?>
