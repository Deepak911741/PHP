<?php
    echo date("d-m-y");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Time Update</title>
    <script>
        function updateTime() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'getTime.php', true);
            xhr.onload = function() {
                if (this.status == 200) {
                    document.getElementById('time').innerText = this.responseText;
                }
            }
            xhr.send();
        }

        setInterval(updateTime, 1000); // Update time every second
    </script>
</head>
<body>
    <h1>Current Time:</h1>
    <p id="time"><?php echo date('H:i:s'); ?></p>
</body>
</html>
