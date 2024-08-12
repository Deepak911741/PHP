<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobby'];
                    $sql = "INSERT INTO user (firstname, lastname, email, gender, hobby) VALUES ('$firstname', '$lastname', '$email', '$gender', '$hobby')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Registration successful!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
$conn->close();
?>
