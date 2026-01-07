<?php

require_once 'backend.php';

?>

<html>
    <body>
        <h1>Bem-vindo, <?php echo $nome; ?>!</h1>
        <h2>Lista de Produtos:</h2>
        <ul>
            <?php
                foreach ($produtos as $produto) {
                    echo "<li>" . $produto . "</li>";
                }
            ?>
        </ul>
    </body>
</html>