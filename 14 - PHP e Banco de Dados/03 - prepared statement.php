<?php

$host = "localhost";
$user = "PHPeSQL";
$password = "123321";
$db = "php_curso";

function lerTabela ($resultados) {
    foreach($resultados as $tupla) {
        print_r($tupla);
        echo "<br>";
    }
    echo "<br>";
}

// Prepared statements, ou declaração preparada, são queries com placeholders em vez de valores reais

// Nesse caso usamos o método 'prepare' para preparar a query, 'bind_param' para resgatar os parâmetros e 'execute' para rodar a query

// Também é importante fechar a conexão, afinal isso ainda é uma query

# INSERT com Prepared Statements  

    $conn = new mysqli($host, $user, $password, $db); // Inicia conexão 

    echo "<strong>Antes do INSERT</strong><br>";
    $resultado = $conn->query("SELECT * FROM Pessoa"); 
    lerTabela($resultado->fetch_all()); // Imprime os valores da tabela

    $stmt = $conn->prepare("INSERT INTO  Pessoa (CPF, nome, idade) VALUES (?, ?, ?)"); // Prepara uma query 

    // Aqui nós temos uma statement preparada, para substituir os placeholders "?" usamos 'bind_param', o valor que vai ser usado para substituí-los pode ser adquirido de inúmeras formas, normalmente por GET, aqui eu vou só criar variáveis mesmo

    $CPF = "444.555.777-14";
    $nome = "Gaston";
    $idade = 25;

    $stmt->bind_param("ssi",$CPF, $nome, $idade); // * Substitui os parâmetros da query preparada 
    $stmt->execute(); // Roda o INSERT na tabela Pessoa

    echo "<strong>Depois do INSERT</strong><br>";
    $resultado = $conn->query("SELECT * FROM Pessoa"); 
    lerTabela($resultado->fetch_all()); // Imprime os valores da tabela

    $conn->close(); // Encerra a conexão

    /* Explicando os parâmetros de bind_param

        * Só "$stmt->bind_param($CPF, $nome, $idade);" não funcionaria, ele dá erro de 'poucos parâmetros'
        * Você precisa avisar para o método qual são os tipos dos valores que vão substituir os placeholders
        * Nesse caso, 'ssi' significa 'String, String, Integer', caso CPF fosse int seria 'isi' não 'ssi'. Para valores double usa-se 'd' 
    */

# DELETE com Prepared Statements  

    // Deletar segue a mesma lógica do insert
    
    $conn = new mysqli($host, $user, $password, $db);

    echo "<strong>Antes do DELETE</strong><br>";
    $resultado = $conn->query("SELECT * FROM Pessoa"); 
    lerTabela($resultado->fetch_all()); 
    
    $condicao = "CPF"; // Nesse caso eu declarei uma variável antes da prepared statement, caso o parâmetro de deleção mude de statement para statement

    $smtm = $conn->prepare("DELETE FROM Pessoa WHERE $condicao = ?");

    $CPF = "444.555.777-14";

    $smtm->bind_param("s", $CPF);
    $smtm->execute();

    echo "<strong>Depois do DELETE</strong><br>";
    $resultado = $conn->query("SELECT * FROM Pessoa"); 
    lerTabela($resultado->fetch_all());

    $conn->close(); 

# SELECT com Prepared Statements

    // Para extrair dados de uma tabela com statements preparados usamos a sequência "prepare => bind_param => execute => get_result => fetch_all" e depois fechamos a conexão

    $conn = new mysqli($host, $user, $password, $db);
    $tabela = "Pessoa"; $condicao = "idade"; // Caso queira select dinâmicos

    $smtm = $conn->prepare("SELECT * FROM $tabela WHERE $condicao >= ?");

    $idade = 30;

    $smtm->bind_param("i", $idade);
    $smtm->execute();
    $resultado = $smtm->get_result();

    echo "<strong>Pessoas com Idade maior ou igual a {$idade} (SELECT)</strong><br>";
    lerTabela($resultado->fetch_all());

    $conn->close();

    // Caso queira somente uma tupla em vez de todas, é possível usar o 'fetch_row' ao invés de 'fetch_all'

# UPDATE com Prepared Statements 

    $conn = new mysqli($host, $user, $password, $db);
    $tabela = "Pessoa"; $condicao = "CPF"; // Caso queira dinamicidade

    echo "<strong>Antes do UPDATE</strong><br>";
    $resultado = $conn->query("SELECT * FROM Pessoa"); 
    lerTabela($resultado->fetch_all());

    $smtm = $conn->prepare("UPDATE $tabela SET nome = ?, idade = ? WHERE $condicao = ?");

    $nome = "Kian"; $idade = 5000; $CPF = "098.765.432-11";

    $smtm->bind_param("sis", $nome, $idade, $CPF);

    $smtm->execute();

    if ($smtm->error) {
        echo "Erro :" . $smtm->error;
    } else {
        echo "<strong>Depois do UPDATE</strong><br>";
        $resultado = $conn->query("SELECT * FROM Pessoa"); 
        lerTabela($resultado->fetch_all());
    }
    
    $conn->close();
?>
