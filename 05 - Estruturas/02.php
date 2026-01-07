<?php

// Switch && If 

function verificarAcesso($idade, $passe) {

    switch ($idade >= 18 && $passe) {

        case true:
            
            return "Acesso autorizado.";
            break;

        case false:
            
            if ($idade < 18) {
                return "Acesso negado. Idade mínima requerida: 18 anos.";
            }

            if (!$passe) {
                return "Acesso negado. Autorização necessária.";
            }
            break;
    }
}

echo verificarAcesso(18, true) . "<br>";
echo verificarAcesso(17, true) . "<br>";
echo verificarAcesso(18, false) . "<br>";


?>