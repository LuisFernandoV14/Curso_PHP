<?php

function sumDigits($number) {
    $number = abs($number);
    $sum = 0;

    if ($number === 0) {
        return 0;
    }

    while ($number > 0) {
        $sum += $number % 10;
        $number = intdiv($number, 10);
    }

    return $sum;
}

?>