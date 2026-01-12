<?php

// Interporlar significa inserir variáveis dentro de Strings, de forma dinâmica
// Tem dois modos de interpolar Strings em PHP, mas elas não tem nenhuma diferença significativa

$nome1 = "Luís";
$nome2 = "Fernando";

echo "Meu primeiro nome é $nome1 <br>"; // Primeiro modo (sem chaves {})
echo "Meu segundo nome é {$nome2} <br>"; // Segundo modo (com chaves {})

// Para iterpolar variáveis é preciso usar aspas duplas ("") ou heredoc (<<<)

echo <<<TEXT
Meu nome completo é $nome1 $nome2
TEXT;
?>