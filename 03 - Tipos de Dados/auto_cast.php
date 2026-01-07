<?php

// Em certas ocasiões, o PHP muda o tipo implicítamente, por exemplo:

$a = 5; // $a é um inteiro

if (is_int($a)) {
    echo $a;
    echo "<br>";
}

$a = 5 / 2; // o resultado dessa operação é 2.5, o que muda $a de um inteiro para um float

if (is_float($a)) {
    echo $a;
    echo "<br>";
}

$b = 1.4; // $b é um float

if (is_float($b)) {
    echo $b;
    echo "<br>";
}

$b = $b . $b; // o resultado dessa operação é uma String "1.41.4", já que '.' é o operador de concatenação

if (is_string($b)) {
    echo $b;
    echo "<br>";
}

// Esse recurso é chamado de auto-cast
?>