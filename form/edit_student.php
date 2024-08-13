<?php
include("./config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $getStudent = $conn->prepare("SELECT * FROM lering WHERE id = ?");
    $getStudent->execute([$id]);
    $student = $getStudent->fetch();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $skills = $_POST['skills'];
        $gender = $_POST['gender'];
        $colorName = $_POST['colorName'];

        $updateStudent = $conn->prepare("UPDATE lering SET name = ?, email = ?, skills = ?, gender = ?, colorName = ? WHERE id = ?");
        $updateStudent->execute([$name, $email, $skills, $gender, $colorName, $id]);

        echo "Student record updated successfully!";
        header("Location: read.php");
        exit();
    }
} else {
    echo "No student ID provided!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Student</h2>
        <form action="" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" value="<?php echo htmlspecialchars($student['name']); ?>" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" value="<?php echo htmlspecialchars($student['email']); ?>" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="skills">Skills</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="skills" name="skills" type="text" value="<?php echo htmlspecialchars($student['skills']); ?>" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="gender">Gender</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="gender" name="gender" type="text" value="<?php echo htmlspecialchars($student['gender']); ?>" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="colorName">Favorite Color</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="colorName" name="colorName" type="text" value="<?php echo htmlspecialchars($student['colorName']); ?>" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</body>
</html>
