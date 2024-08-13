<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lern";

$conn = new PDO("mysql:servername=$$servername; dbname=$dbname",$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

?>