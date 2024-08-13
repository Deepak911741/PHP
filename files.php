<?php
if (isset($_POST['filename'])) {
    $filename = $_POST['filename'];
    $content = $_POST['content'];

    $file = fopen($filename, "w");
    if (!$file) {
        echo "Error opening file for writing.";
        exit;
        }
        fwrite($file, $content);
        fclose($file);
        echo "file created";
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="filename" id="text" placeholder="Enter your file name ex-text.txt"/>
        <br/>
        <br/>
        <textarea name="content" id="" placeholder="Enter Your content">

        </textarea>
        <button>Create</button>
        <!-- <input type="submit" name="submit" value="Upload"/> -->
    </form>
</body>
</html>