<?php
include("./config.php");
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $skills = $_POST['skills'];
    $gender = $_POST['gender'];
    $colorName = $_POST['colorName'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO lering (name, email, password, skills, gender, colorName) VALUES ('$name', '$email', '$hashed_password', '$skills', '$gender', '$colorName')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
            header("Location: read.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
$conn->close();

?>
