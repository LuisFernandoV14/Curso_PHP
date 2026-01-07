<?php

    // Case Sensitive:

        // Não é case sensitive:
            echo "Teste 1 <br>";
            eChO "Teste 2 <br>";
            ECHO "Teste 3 <br>";

        // É case sensitive:
            $teste = "Teste 4 <br>";
            echo $teste;
            $TESTE = "Teste 5 <br>";
            echo $TESTE;
        
    // Instruções:
    
        // Precisam de ponto e vírgula:
            // Instruções de uma linha
            echo "Teste 6 <br>";

        // Não precisam de ponto e vírgula:
            // Instruções complexas, como blocos de código
            if (14 > 13) {
                echo "Teste 7 <br>";
            }

    // Comentários:

            // Comentário em uma linha
            # Comentário em uma linha
            /* Comentário em bloco */    

?>