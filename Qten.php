<?php
function findMaxValue($array) {
    return max($array);
}


$array1 = array(15, 25, 0, 35, 7, 19);
echo findMaxValue($array1); 
echo "<br>";
$array2 = array(200, 13, 197, 98, 106);
echo findMaxValue($array2); 
?>
