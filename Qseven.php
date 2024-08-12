<?php
    function generateRandomNumericString($length = 6) {
        $numericalValues = "1234567890";
        $randomString = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($numericalValues) - 1);
            $randomString .= $numericalValues[$randomIndex];
        }
        
        return $randomString;
    }
    
    echo generateRandomNumericString();
    

?>