<?php

// Podemos usar o "require" para inserir um arquivo de PHP, ou um HTML, em outro arquivo 
// Tudo que está declarado no arquivo incluido poderá ser usado
// Incluir um arquivo que não existe resulta em erro fatal e essa é a única diferença para o include

require 'teste.html';

echo "<br>" . "Arquivo HTML incluído com sucesso!";

?>