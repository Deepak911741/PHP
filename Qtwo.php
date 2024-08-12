<?php

function lenfun($check_fun){
    $trimmedString = trim($check_fun);

    return strlen($trimmedString);
}

echo lenfun("  PHP Develop");
echo "<br>";
echo lenfun("Web Designer   ");

?>