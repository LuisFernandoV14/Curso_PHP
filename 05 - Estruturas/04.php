<?php

// Switch

function verificarCategoria($categoria) {

    if (!is_string($categoria)) {
        return "Input incorreto";
    }

    switch ($categoria) {

        case "eletrônicos":
            return "Essa categoria é de produtos eletrônicos";
        break;

        case "vestuário":
            return "Essa categoria é de produtos de vestuário";
        break;

        case "alimentos":
            return "Essa categoria é de produtos alimentícios";
        break;

        default:
            return "Categoria desconhecida";
        break;

    }

}

echo verificarCategoria("eletrônicos") . "<br>";
echo verificarCategoria("vestuário") . "<br>";
echo verificarCategoria("alimentos") . "<br>";
echo verificarCategoria("brinquedos") . "<br>";
echo verificarCategoria(100) . "<br>";


?>