<?php

function maioresQueSete ($array) {

    $arr = [];

    foreach ($array as $item) {
        if ($item > 7) {
            array_push($arr, $item);
        }
    }

    return $arr;

}

$arr = [1, 3, 5, 7, 9, 11, 14, 15, 2, 4, 6, 8, 10, 12];

$resultado = maioresQueSete($arr);

print_r($resultado);
echo "<br>";
echo implode(", ", $resultado);


?>