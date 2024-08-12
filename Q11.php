<?php
function checkValueInArray($array, $value) {
    if (in_array($value, $array)) {
        echo "Found";
    } else {
        echo "Not Found";
    }
}

$associatedArray1 = array(8, 9, 10, 15);
$value1 = 12;
checkValueInArray($associatedArray1, $value1); 

$associatedArray2 = array("Banana", "Mango", "Apple");
$value2 = "Apple";
echo "<br>";
checkValueInArray($associatedArray2, $value2);
?>
