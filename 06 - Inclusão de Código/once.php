<?php

// O include_once e o require_once funcionam da mesma forma que o include e o require, entretanto, eles impedem que um mesmo arquivo seja incluído mais de uma vez

require_once 'teste.html';
require_once 'teste.html';

echo "<br>" . "Arquivo HTML incluído com sucesso!";

?>