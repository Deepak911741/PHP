<?php
function stringToArray($inputString) {
    $array = explode(' ', $inputString);
    
    return $array;
}

print_r(stringToArray("PHP is Server Side Scripting Language"));
// print "<br>"
print_r(stringToArray("Today is Sunday"));
?>
