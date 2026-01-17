<?php

    // Até então estávamos trabalhando somente com inputs de valores únicos, mas é possível criar um array para receber multiplos valores. Para isso passamos uma array em 'name' de um 'form'

    $itens = [];

    if (isset($_POST['itens'])) {
        $itens = $_POST['itens'];
    }

    echo "<h1> Sua lista de compras: </h1> ";
    
    foreach($itens as $item) {
        echo $item . "<br>";
    }

    
?>

