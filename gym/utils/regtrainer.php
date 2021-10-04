<?php
include('conn.php');
session_start();
$trainerid = $_GET['trainerid'];
$name = $_GET['name'];
$mobileno = $_GET['mobileno'];
 
//echo $trainerid." " .$name." " .$mobileno." ";

$sql = "INSERT INTO Trainer (trainerid, name, mobileno) VALUES ($trainerid, '$name', $mobileno)";

$result = $db->query($sql);

echo "Trainer Created successfully, plz <button onclick='history.back()'>back</button>";
?>
