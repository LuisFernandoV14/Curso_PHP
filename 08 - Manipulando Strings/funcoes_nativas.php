<?php


// Limpando Strings

    // Existem funções nativas do PHP que servem para limpar espaços em brancos no início, meio e final de Strings  
      $nome = "           João       Guilherme           ";

        $nomeLimpo = trim($nome); // Remove espaços em branco do início e do final da String
        $nomeLimpoEsquerda = ltrim($nome); // Remove espaços em branco do início da String
        $nomeLimpoDireita = rtrim($nome); // Remove espaços em branco do final da String

        echo "Nome original: '" . $nome . "'<br>";
        echo "Nome limpo (trim): '" . $nomeLimpo . "'<br>";
        echo "Nome limpo à esquerda (ltrim): '" . $nomeLimpoEsquerda . "'<br>";
        echo "Nome limpo à direita (rtrim): '" . $nomeLimpoDireita . "'<br>";
    
echo "<br>";

// Alterando o case

    // Existem funções nativas do PHP que servem para alterar o case (maiúsculo/minúsculo) de Strings

        $texto = "Olá Mundo! Este é um Exemplo de Manipulação de Strings em PHP.";

        $textoMaiusculo = strtoupper($texto); // Converte toda a String para maiúsculo
        $textoMinusculo = strtolower($texto); // Converte toda a String para minúsculo
        $textoPrimeiraMaiuscula = ucfirst($texto); // Converte a primeira letra da String para maiúsculo
        $textoCadaPalavraMaiuscula = ucwords($texto); // Converte a primeira letra de cada palavra para maiúsculo

        echo "Texto original: " . $texto . "<br>";
        echo "Texto em maiúsculo: " . $textoMaiusculo . "<br>";
        echo "Texto em minúsculo: " . $textoMinusculo . "<br>";
        echo "Texto com a primeira letra maiúscula: " . $textoPrimeiraMaiuscula . "<br>";
        echo "Texto com a primeira letra de cada palavra maiúscula: " . $textoCadaPalavraMaiuscula . "<br>"; 
    
    // Essas funções não serviram para colocar "é", "ç", "ã" em maiúsculo ou minúsculo corretamente porque o PHP não está configurado para lidar com caracteres especiais de línguas latinas. Para isso, seria necessário usar as funções mb_* (multibyte) do PHP, como mb_strtoupper() e mb_strtolower(), e configurar a codificação correta (UTF-8).

echo "<br>";



?>