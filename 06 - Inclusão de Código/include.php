<?php

// Podemos usar o "include" para inserir um arquivo de PHP, ou um HTML, em outro arquivo 
// Tudo que está declarado no arquivo incluido poderá ser usado
// Incluir um arquivo que não existe não resulta em erro fatal, somente em 'warning'

include 'teste.html';

echo "<br>" . "Arquivo HTML incluído com sucesso!";

?>