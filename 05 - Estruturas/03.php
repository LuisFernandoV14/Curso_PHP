<?php

// Switch

function calcularDesconto($valor, $categoria) {

    switch ($categoria) {

        case "eletrônicos":
            $valor -= $valor * 10 / 100; // 10% de desconto
            return $valor; 
        break;

        case "vestuário":
            $valor -= $valor * 20 / 100; // 20% de desconto
            return $valor; 
        break;

        case "alimentos":
            $valor -= $valor * 5 / 100; // 5% de desconto
            return $valor; 
        break;

        default:
            return $valor; // sem desconto
        break;

    }
    
}

echo calcularDesconto(100, "eletrônicos") . "<br>";
echo calcularDesconto(100, "vestuário") . "<br>";
echo calcularDesconto(100, "alimentos") . "<br>";
echo calcularDesconto(100, "brinquedos") . "<br>";
echo calcularDesconto(100, "materiais de construção") . "<br>";


?>