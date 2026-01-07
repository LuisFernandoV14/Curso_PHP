<?php

// For

$arr = [0];

print_r($arr);

echo "<br>";

for ($i = 1; $i <= 14; $i++) {
    array_push($arr, $i);
} 

print_r($arr);

echo "<br>";

// Obs, o foreach também existe em PHP

// For Each

foreach ($arr as $item) {
    echo $item . "<br>";
}



?>