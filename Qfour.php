<?php
function printchar($inputString) {
    $first15Chars = substr($inputString, 0, 15);
    echo $first15Chars;
}


printchar("Wish u many many happy returns of the day."); 
echo "<br>";
printchar("Hello, How are you ?"); 
?>
