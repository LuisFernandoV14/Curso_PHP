<?php

// A estrutura de repetição 'foreach' tem uma estrutura diferente quando usada em conjunto com arrays associativos:
    $arrass = [
        'cor' => 'Vermelho',
        'ano' => 2006,
        'marca' => 'Fiat',
        'modelo' => 'Palio'
    ];

    foreach ($arrass as $chave => $valor) {
        echo "Chave: $chave - Valor: $valor <br>";
    }

    // É o dev que escolhe o nome das variáveis que vão ser usada para representar chave e valor
?>