<?php

    // Tipos de dados
        $i = 14; // Integer
        $f = 6.12; // Float
        $b = true; // Boolean
        $s = "Essa é uma String"; // String
        $a = [$i, $f, $b, $s]; // Array
        $as = ['nome' => "Carlos", 'idade' => 57, 'profissão' => "Professor"]; // Array associativo 

    // Verificação de dados
        if (is_int($i)) {
            echo $i; 
            echo "<br>";
        }
  
        if (is_float($f)) {
            echo $f;
            echo "<br>"; 
        }
  
        if (is_bool($b)) {
            echo $b; // Imprime '1'
            echo "<br>"; 
        }
  
        if (is_string($s)) {
            echo $s;
            echo "<br>"; 
        }

        if (is_array($a)) {
            print_r($a);
            echo "<br>";
            echo $a[0];
            echo "<br>";
        }

        if (is_array($as)) {
            print_r($as);
            echo "<br>";
            echo $as['nome'];
            echo "<br>";
        }

        /*
            * Arrays não são homogêneos, eu posso ter vários tipos diferentes de dados em um array, mesmo que não seja uma boa prática.
            * "echo" transforma a variável em String e imprime ela, por isso não dá pra usar echo para imprimir um array.
            * Assim como outras linguagens de programação, arrays começam em index 0.

        */
?>