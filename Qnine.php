<?php
function addElement(&$array, $newElement) {
    $array[] = $newElement;
}

$array1 = array(1, 2, 3);
$newElement1 = 4;
addElement($array1, $newElement1);
print_r($array1); 

$array2 = array("php", "java");
$newElement2 = "css";
echo "<br>";
addElement($array2, $newElement2);
print_r($array2); 
