<?php

// O include_once e o require_once funcionam da mesma forma que o include e o require, entretanto, eles impedem que um mesmo arquivo seja incluído mais de uma vez

require_once 'teste.html';
require_once 'teste.html';

echo "<br>" . "Arquivo HTML incluído com sucesso!";

// Obs: Em meus estudos eu me deparei com algo que não tinha notado enquanto estudava inclusão de código: Include e Require (assim como include_once e require_once) rodam inteiro o arquivo incluído. Então se houver um echo no arquivo incluído, ele será executado no ponto da inclusão.

// Ambos os comandos também retornam o valor '1' se a inclusão for bem sucedida, ou seja, podemos armazenar esse retorno em uma variável. Porém, se houver um erro na inclusão, include retorna 'warning' e require retorna 'fatal error'.
?>