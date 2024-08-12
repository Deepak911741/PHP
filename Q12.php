<?php
function removeBlanks($array) {
    return array_filter($array, function($value) {
        return $value !== '';
    });
}

$input1 = array(1, 2, '', 3, 0, 5);
$input2 = array('', 'PHP', 'Java', 'Web', 'Server', '');

$output1 = removeBlanks($input1);
$output2 = removeBlanks($input2);

print_r($output1); 
echo "<br>";
print_r($output2);
?>
