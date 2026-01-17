<?php

// Cookies são strings que contém informações
// A função para adicionar um cookie é setcookie. Essa função deve ser chamada antes do corpo da página, pois envia dados como header

// O cookie leva dados como:nome, valor e data de expiração

// Podemos acessar os cookies de volta com $_COOKIE

// Alguns navegadores não aceitam cookies

setcookie("nome", "Carlinhos Maia", time() + 200); // A data de expiração é o tempo atual (time) + um tempo em segundos

if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
}

print_r($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_COOKIE)): ?>
        <h3> Olá <?= $nome ?> </h3>
    <?php endif;?>    
</body>
</html>