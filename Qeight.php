<?php
    function capitalizeFirstLetterOfWords($input) {
        return ucwords(strtolower($input));
    }
    
    echo capitalizeFirstLetterOfWords("good morning student");
    echo "<br>";
    echo capitalizeFirstLetterOfWords("PHP is Open source platform");

?>