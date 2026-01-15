<?php

ob_start();

include "04 - herança.php";

$conteudo_do_echo = ob_get_clean();

// Agora as variáveis do arquivo estão disponíveis, mas os echos 
// dele não apareceram. Eles estão guardados em $conteudo_do_echo.

// Usando a função nativa "instanceof" é possível verificar a ancestralidade de um objeto:

    foreach ($animais as $animal) {
        
        if ($animal instanceof Gato) {
            echo $animal->getNome() . " é um " . $animal->getEspecie() . "<br>";

        } elseif ($animal instanceof Cachorro) {
            echo $animal->getNome() . " é um " . $animal->getEspecie() . "<br>";

        } else {
            echo $animal->getNome() . " é um animal desconhecido<br>";
        }
    }

// Se tiver lendo os meus estudos em ordem, vai ver que em inclusão de código eu falo sobre como include e require rodam o arquivo incluindo seus echos, 'ob_start' e 'ob_get_clean' é um jeito de burlar isso, ob_start começa a gravar a saída em um buffer, e ob_get_clean pega esse buffer e limpa ele, ou seja, nada é exibido na tela, mas fica disponível para uso posterior.

echo "<br><br><strong>Conteúdo capturado do arquivo incluído:</strong><br>";
echo $conteudo_do_echo;
?>