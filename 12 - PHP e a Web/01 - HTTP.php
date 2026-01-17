<?php

// Introdução ao HTTP

    // A web roda em cima do protocolo HTTP (HyperText Transfer Protocol)

    // Quando um navegador solicita uma página web é feito um request HTTP
    // O request recebe então uma resposta. Ambos request e resposta podem possuir um corpo (body)

    // A resposta sempre possuirá um cabeçalho (header) constituído pelo método (GET, POST...), pelo caminho do arquivo (.../index.php) e pela versão do protocolo HTTP (Ex: HTTP/1.x)

    // O body é conteúdo, por exemplo, uma página HTML

    // Basicamente, uma requisição é enviada, uma resposta é recebida

// Métodos HTTP

    // As requisições que enviamos também contém métodos, alguns deles são:

    // GET => Solicita a apresentação de um recurso, como a visualização de uma página
    // POST => Envio de dados ao servidor, como o cadastro de um usuário
    // PUT => Atualização de dados
    // DELETE => Remoção de dados
    // PATCH => Atualização de dado específico                  

// Variáveis globais do PHP

    // Para lidar com as requisições, o PHP fornece algumas variáveis globais:

    // $_ENV => Variáveis de ambiente 
    // $_GET => Parâmetros que foram enviados por request GET 
    // $_POST => Parãmetros que foram enviados por POST
    // $_COOKIE => Valores de cookies
    // $_FILES => Informações sobre os arquivos que vieram por upload
    // $_SERVER => Informações sobre o servidor

    // As variáveis globais são alteradas todo tempo pelo próprio software

// Teoria de processamento de formulários 
    
    // Até então o processsamento de formulários usará somente GET e POST

    // Com o GET vamos processar os parâmetros que vem na query string, ou seja, na URL
    // Com o POST vamos processar as informações que vem na requisição, estas não aparecem na URL

    // Ex: Buscas => GET | Registro de usuário => POST
?>

Nada para ver aqui