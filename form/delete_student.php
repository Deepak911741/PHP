<?php
include("./config.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteStudent = $conn->prepare("DELETE FROM lering WHERE id = ?");
    $deleteStudent->execute([$id]);

    echo "Student record deleted successfully!";
    header("Location: read.php");
    exit();
} else {
    echo "No student ID provided!";
    exit();
}
?>
