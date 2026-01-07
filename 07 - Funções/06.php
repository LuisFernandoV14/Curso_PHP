<?php

// Existem duas funções nativas do PHP que auxiliam a manter o controle de parâmetros em funções: func_get_args() e func_num_args()

function mostrarDados ($nome, $sobrenome, $idade) {
    $argumentos = func_get_args();
    $total_argumentos = func_num_args();

    echo $nome . " " . $sobrenome . ". Idade: " . $idade . " anos." . "<br>";

    echo "Total de argumentos passados: " . $total_argumentos . "<br>";
    print_r($argumentos);
    echo "<br><br>";

}

mostrarDados("Jorge", "Silva", 28);
mostrarDados("Ana", "Oliveira", 34, "Extra Argument");
mostrarDados("Carlos", "Pereira", 22);

/*
    Quando é passado um parâmetro extra para uma função ele é simplesmente ignorado, mas não esquecido. 
    O código não gera erro, nem trava, mas o parâmetro continua na memória e pode ser acessado com as funções func_get_args() e func_num_args()

*/

?>