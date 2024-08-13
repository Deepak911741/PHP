<?php
/*include("./config.php");

$getStudents = $conn->prepare("SELECT * FROM lering");
$getStudents->execute();
$lering = $getStudents->fetchAll();

echo "<table border='1'>";
foreach($lering as $student){
    echo "<tr>";
    echo "<td>".$student['id']."</td>";
    echo "<td>".$student['name']."</td>";
    echo "<td>".$student['email']."</td>";
    echo "<td>".$student['password']."</td>";
    echo "<td>".$student['skills']."</td>";
    echo "<td>".$student['gender']."</td>";
    echo "<td>".$student['colorName']."</td>";
    echo "</tr>";
}
*/
?>

<?php
include("./config.php");

$getStudents = $conn->prepare("SELECT * FROM lering");
$getStudents->execute();
$lering = $getStudents->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7fafc;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .edit-btn, .delete-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .delete-btn:hover {
            background-color: #e41b0f;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Skills</th>
            <th>Gender</th>
            <th>Favorite Color</th>
            <th>Actions</th>
        </tr>
        <?php foreach($lering as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student['id']); ?></td>
                <td><?php echo htmlspecialchars($student['name']); ?></td>
                <td><?php echo htmlspecialchars($student['email']); ?></td>
                <td><?php echo htmlspecialchars($student['password']); ?></td>
                <td><?php echo htmlspecialchars($student['skills']); ?></td>
                <td><?php echo htmlspecialchars($student['gender']); ?></td>
                <td><?php echo htmlspecialchars($student['colorName']); ?></td>
                <td>
                    <div class="action-buttons">
                        <button class="edit-btn" onclick="editStudent(<?php echo $student['id']; ?>)">Edit</button>
                        <button class="delete-btn" onclick="deleteStudent(<?php echo $student['id']; ?>)">Delete</button>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script>
        function editStudent(id) {
            window.location.href = 'edit_student.php?id=' + id;
        }

        function deleteStudent(id) {
            if (confirm('Are you sure you want to delete this student?')) {
                window.location.href = 'delete_student.php?id=' + id;
            }
        }
    </script>
</body>

</html>
