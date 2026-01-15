<?php

// Podemos usar o "include" para inserir um arquivo de PHP, ou um HTML, em outro arquivo 
// Tudo que está declarado no arquivo incluido poderá ser usado
// Incluir um arquivo que não existe não resulta em erro fatal, somente em 'warning'

include 'teste.html';

echo "<br>" . "Arquivo HTML incluído com sucesso!";

// Obs: Em meus estudos eu me deparei com algo que não tinha notado enquanto estudava inclusão de código: Include e Require (assim como include_once e require_once) rodam inteiro o arquivo incluído. Então se houver um echo no arquivo incluído, ele será executado no ponto da inclusão.

// Ambos os comandos também retornam o valor '1' se a inclusão for bem sucedida, ou seja, podemos armazenar esse retorno em uma variável. Porém, se houver um erro na inclusão, include retorna 'warning' e require retorna 'fatal error'.

?>