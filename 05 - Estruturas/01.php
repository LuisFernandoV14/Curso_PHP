<?php

// If

function compararNumeros($x, $y) {
    
    if ($x > $y) {
        return "O primeiro número é maior." . " (" . $x . ", " . $y . ").";
    }
    else if ($x == $y) {
        return "Os números são iguais." . " (" . $x . ", " . $y . ").";
    }
    else return "O segundo número é maior." . " (" . $x . ", " . $y . ").";
}

echo compararNumeros(14, 12) . "<br>";
echo compararNumeros(12, 14) . "<br>";
echo compararNumeros(14, 14) . "<br>";

?>