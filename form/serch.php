<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .search-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .search-container input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .search-container button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-container button:hover {
            background-color: #218838;
        }

        .results {
            margin-top: 20px;
            text-align: left;
        }

        .results p {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="search-container">
        <form action="" method="post">
            <input type="text" name="search" placeholder="Enter name for search" required>
            <br/><br/>
            <button type="submit">Search</button>
        </form>

        <div class="results">
            <?php
            include('./config.php');

            if (isset($_POST['search'])) {
                $search = $_POST['search'];
                $student = $conn->prepare("SELECT * FROM lering WHERE name = ?");
                $student->execute([$search]);
                $result = $student->fetchAll();
                if ($result) {
                    foreach ($result as $row) {
                        echo "<p>ID: " . htmlspecialchars($row['id']) . "<br>";
                        echo "Name: " . htmlspecialchars($row['name']) . "<br>";
                        echo "Email: " . htmlspecialchars($row['email']) . "<br>";
                        echo "Skills: " . htmlspecialchars($row['skills']) . "<br>";
                        echo "Gender: " . htmlspecialchars($row['gender']) . "<br>";
                        echo "Favorite Color: " . htmlspecialchars($row['colorName']) . "</p>";
                    }
                } else {
                    echo "<p>No results found.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
