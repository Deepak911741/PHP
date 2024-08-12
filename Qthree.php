<?php
function findHelloPosition($inputString) {
   
    $position = strpos($inputString, 'Hello');
    
    if ($position !== false) {
        return $position;
    } else {
        return "Not Found";
    }
}

echo findHelloPosition("Good Morning Hello, Developer and Hello Designer");
echo "<br>";
echo findHelloPosition("Today is Sunday."); 
