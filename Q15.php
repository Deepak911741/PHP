<?php
function getDayOfNextDate($dateString) {
    $date = DateTime::createFromFormat('d-m-Y', $dateString);
    
    if ($date === false) {
        return "Invalid date format";
    }


    $date->modify('+1 day');

    return $date->format('l');
}

echo getDayOfNextDate('14-03-2024'); 
echo "<br>";
echo getDayOfNextDate('23-03-2024'); 
?>
