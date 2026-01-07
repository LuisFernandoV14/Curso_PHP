<?php

function sumEvenNumbers ($integer) {
    
    $sum = 0;
    
    for ($i = 1; $i <= $integer; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
        }
    }
    
    return $sum;
    
}

echo sumEvenNumbers(10);
echo "<br>";
echo sumEvenNumbers(20);
echo "<br>";
echo sumEvenNumbers(50);

?>