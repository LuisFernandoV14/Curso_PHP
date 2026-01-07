<?php

// Parâmetros 'default' em funções são usados quando nenhum valor é passado ao chamar a função.

function defineCorCarro($cor = "vermelho") {

    return "A cor do carro é " . $cor . "<br>";
    
}

echo defineCorCarro();
echo defineCorCarro("azul");
echo defineCorCarro("verde");
echo defineCorCarro("roxa");
echo defineCorCarro("rosa");

?>