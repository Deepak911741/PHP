<?php
// $file = "file.xlsx";
// $myFile = fopen($file, 'r')
// or die("Unable to open file!");
// echo fread($myFile, filesize($file))


if (isset($_FILES['file'])) {
    $file=$_FILES['file']['temp_name'];
    $myFile = fopen($file, "r")or die("unable to read file");
    echo fread($myFile, filesize($file));
    fclose($myFile);
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br/>
        <br/>
        <button>Read File</button>
    </form>
</body>
</html>