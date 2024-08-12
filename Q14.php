<?php
function getMonthStartEndDates($monthYear) {
    $startDate = DateTime::createFromFormat('m-Y', $monthYear);
    if ($startDate === false) {
        return "Invalid date format";
    }
    
    $startDate->setDate($startDate->format('Y'), 
    $startDate->format('m'), 1);

    $endDate = clone $startDate;

    $endDate->modify('last day of this month');

    $startDateFormatted = $startDate->format('d-m-Y');
    $endDateFormatted = $endDate->format('d-m-Y');

    return "Start Date = $startDateFormatted and End Date = $endDateFormatted";
}


echo getMonthStartEndDates('04-2024'); 
echo "<br>";
echo getMonthStartEndDates('02-2024');  
?>
