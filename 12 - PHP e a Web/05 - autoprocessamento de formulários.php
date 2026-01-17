<?php 

    // É possível criar uma página que faz o processamento dos dados e também exibe o input de informações
    // Para isso, basta usar um if que checa o método de requisição e a variável global $_SERVER (usado na linha 22 e 34)

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoprocesssamento</title>
</head>
<body>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "GET"):
    ?>
            <form action="05 - autoprocessamento de formulários.php" method="POST">
                <div>
                    <input type="text" name="nome" placeholder="Digite seu nome">
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>

    <?php
        elseif ($_SERVER['REQUEST_METHOD'] == "POST"):
    ?>

            <h3>O seu nome é <?= $nome ?></h3>

    <?php 
        endif;
    ?>
    
</body>
</html>

<?php 

    /* Explicando esse código

        * Primeiro, o 'isset' verifica se o arrau associativo $_POST (varíavel global) tem o valor 'nome' setado, se sim, transforma isso em uma variável
        * Depois, existe um bloco 'if-elseif-endif' em PHP. O primeiro if verifica se o método é GET, se for GET significa que a página acabou de ser carregada, então ele pede um formulário para colocar o nome
        * Caso o primeiro if não rodar o 'elseif' rodará. Como o método é 'POST' significa que o formulário já foi respondido e enviado, então ele imprimirá o resultaado do formulário
        * O endif é obrigatório para delimitar o fim do bloco

        * Tudo isso é feito para termos os métodos GET e POST em uma página só, sem encaminhar para outra página, ou seja, um autoprocessamento 

    */

?>