<?php

$host = "localhost";
$user = "PHPeSQL";
$password = "123321";
$db = "php_curso";

$tabela = "Pessoa";

function lerTabelaPessoa ($conn) {
    $resultado = $conn->query("SELECT * FROM Pessoa"); 
    $resultados = $resultado->fetchAll(PDO::FETCH_ASSOC); 

    foreach($resultados as $tupla) {
        print_r($tupla);
        echo "<br>";
    }
    echo "<br>";

    // O PDO tem alguns métodos iguais o mysqli mas com nomes diferentes
    // Além disso, o fetchAll do PDO sempre dá valores repetidos, dois arrays associativos, um com as chaves iguais os indices e um com as chaves iguais ao nome das colunas da tabela
    // Caso queira só um array é possível usar fetchAll(PDO::FETCH_ASSOC);   
}

// A conexão com PDO é um pouco diferente. Mas para estabelecer conexão os parâmetros são os mesmos:

$conn = new PDO("mysql:host={$host};dbname={$db}", $user, $password);

// O fechamento de conexão também é diferente. Usando PDO, o PHP é inteligente o suficiente para fechar sozinho no fim do programa. Mas, se não houver nenhum statement usando a conexão, é possível usar "$conn = null;" (por exemplo) para fechar a conexão antes do programa acabar

// Precisa disso porque o PDO não está limitado somente ao MySQL

#INSERT (PDO) com Prepared Statements
    
    $stmt = $conn->prepare("INSERT INTO $tabela (CPF, nome, idade) VALUES (:CPF, :nome, :idade)");
    
    echo "<strong>Antes do INSERT</strong><br>";
    lerTabelaPessoa($conn);

    $CPF = "666.666.666-66";
    $nome = "Danzou";
    $idade = 76;

    $stmt->bindParam(":CPF", $CPF);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":idade", $idade);

    $stmt->execute();

    echo "<strong>Depois do INSERT</strong><br>";
    lerTabelaPessoa($conn);

# DELETE (PDO) com Prepared Statements

    $condicao = "CPF";

    $stmt = $conn->prepare("DELETE FROM $tabela WHERE $condicao = :CPF");

    echo "<strong>Antes do DELETE</strong><br>";
    lerTabelaPessoa($conn);

    $CPF = "666.666.666-66";

    $stmt->bindParam(":CPF", $CPF);
    
    $stmt->execute();

    echo "<strong>Depois do DELETE</strong><br>";
    lerTabelaPessoa($conn);

# UPDATE (PDO) com Prepared Statements 

    $parametro = "nome"; $condicao = "CPF";

    $stmt = $conn->prepare("UPDATE $tabela SET $parametro = :parametro WHERE $condicao = :condicao");
    
    echo "<strong>Antes do UPDATE</strong><br>";
    lerTabelaPessoa($conn);

    $nome = "Danzou"; $CPF = "123.456.789-00";

    $stmt->bindParam(":parametro", $nome);
    $stmt->bindParam(":condicao", $CPF);
    
    $stmt->execute();

    echo "<strong>Depois do UPDATE</strong><br>";
    lerTabelaPessoa($conn);

# SELECT (PDO) com Prepared Statements

    $condicao = "idade"; 
    $idade = 5000;
    $parametro = "nome";

    $stmt = $conn->prepare("SELECT * FROM $tabela WHERE $condicao >= :condicao");

    $stmt->bindParam(":condicao", $idade);

    $stmt->execute();

    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
    echo "<strong>Pessoas com idade maior ou igual a $idade (SELECT)</strong><br>";
    foreach($resultados as $tupla) {
        print_r($tupla);
        echo "<br>";
    }

    echo "<br>";

    // Usando PDO não há necessidade do "get_result()"
    
// É possível ver que a maior diferença do PDO para mysqli em termos de sintaxe é a forma que os parâmetros são escritos ("?" vs :...) e o case sensitive dos métodos


?>
