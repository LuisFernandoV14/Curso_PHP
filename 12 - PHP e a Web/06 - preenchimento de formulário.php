<?php

// Podemos preencher um formulário com dados que vieram da requisição
// Isso acontece bastante em resultados de busca ou edições de registros

// Um modo de checar se um dado foi enviado e recebido é usando 'echo' no 'value' de um 'form'

class Pessoa {

    // Usei public pra não precisar de getter e setter
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

}

if (!empty($_POST)) {
    $P1 = new Pessoa($_POST['nome'], $_POST['idade']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento</title>
</head>
<body>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "GET"):
    ?>
    
        <h1> Cadastrando Usuário </h1>

        <form action="06 - preenchimento de formulário.php" method="POST">
            <div>
                <input type="text" name="nome" placeholder="Digite seu nome">
            </div>
            <div>
                <input type="text" name="idade" placeholder="Digite sua idade">
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>

        </form>

    <?php
        elseif ($_SERVER['REQUEST_METHOD'] == "POST"):
    ?>

            <h1> Login de Usuário </h1>

            <form action="">
                <div>
                    <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $P1->nome?>">
                </div>
                <div>
                    <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $P1->idade?>">
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
    
            <br>

            Perceba que no Login de Usuário o nome e a idade já estão preenchidas nos formulários
    <?php
        endif;
    ?>

</body>
</html>