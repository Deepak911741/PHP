<?php

//  Write a function to verify if the input string contains the word "Hello".
function checkHello($inputString) {
    if (strpos($inputString, 'Hello') !== false) {
        return "Found";
    } else {
        return "Not Found";
    }
}

echo checkHello("Hello, Developer"); 
echo "<br>";
echo checkHello("Good morning, Developer");
?>
