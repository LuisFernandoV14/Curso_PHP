<?php

// Usando a função 'range' é possível criar um array de forma rápida e prática

    // Criando um array com números de 1 a 10
        $numeros = range(1, 10);
        print_r($numeros);
        echo "<br>";

    // Criando um array com letras de 'a' a 'z'
        $letras = range('a', 'z');
        print_r($letras);
        echo "<br>";

    // Criando um array com números pares de 2 a 20
        $pares = range(2, 20, 2); // O terceiro parâmetro é o passo (incremento)
        print_r($pares);
        echo "<br>";

    // Criando um array com números ímpares de 1 a 19
        $impares = range(1, 19, 2);
        print_r($impares);
        echo "<br>";
    
    // Teste
        $teste = range( 'A', 'Z', 3); 
        print_r($teste);
        echo "<br>";

?>