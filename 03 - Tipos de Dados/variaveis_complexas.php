<?php
    // Variável de variável
        // Em PHP é possível criar uma varíavel apartir de outra variável:

            $var = "Variavel";
            $$var = "Variavel de Variavel";
            
            echo $var;
            echo "<br>";
            echo $$var;
            echo "<br>";
            echo $Variavel; // Em vez de usar dois cifrões, é possível usar o valor que estava guardado na primeira variável com um cifrão só

     echo "<br>";

    // Variável por referência
        // Semelhante aos ponteiros em C:

            $var2 = "Base";
            $var3 =& $var2;
            
            echo $var3; // Imprimindo var3 vai imprimir "Base"
            
            echo "<br>";
            $var3 = "Referência";

            echo $var2; // Depois de mudar var3 var2 também é alterado, isso imprimirá "Referência"
?>