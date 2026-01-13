<?php

$arr = [];

// Adicionando usando índice: 

    $arr[0] = "Valor 1";
    $arr[1] = "Valor 2";

    // É possível quebrar a ordem lógica dos índices, mas não é recomendado. Desse jeito eu reservo um índice na memória para uso futuro

    $arr[5] = "Valor 3"; // Índice 2, 3 e 4 ficam vazios

print_r($arr);

echo " Perceba a ordem dos índices <br>";

// Adicionando usando funções nativas:

    // array_push(): Adiciona um ou mais valores no final do array

        array_push($arr, "Valor 4", "Valor 5");

    // array_unshift(): Adiciona um ou mais valores no início do array

        array_unshift($arr, "Valor 0", "Valor -1");

print_r($arr);
?>