<?php

$host = "localhost";
$user = "PHPeSQL";
$password = "123321";
$db = "php_curso";

# Estabelecendo conexão 

    // Para conectar o PHP com um banco de dados usando mysqli usamos a função 'mysqli_connect()'
    // É preciso passar 'host', 'usuário', 'senha' e 'banco de dados' como parâmetro
    // Com a conexão feita podemos utilizar as queries

    // mysqli_connect() retorna 'FALSE' caso a conexão não seja estabelecida e retorna um objeto da classe mysqli que representa a 'ponte' aberta entre o PHP e o MySQL, todas as queries usarão esse objeto

    // Uma forma mais organizada de usar essa função é tratar como um método construtor, e usar 'new mysqli' ao invés de 'mysqli_connect()', usando 'new' os parâmetros são os mesmo, mas existe a função 'connect_error" que apresenta o número e a mensagem de erro e não somente 'FALSE'

    $conn = new mysqli("localhost", "PHPeSQL", "123321", "php_curso"); // Jeito por extenso de realizar a conexão, o jeito recomendado é através de variáveis

# Realizando uma query

    // Utiliza-se o método 'query' que deve ser usado a partir do objeto que fez a conexão (nesse caso, $conn)
    // Dependendo da query receberemos um retorno como resultado
    // É importante fechar a conexão no fim de todas as queries com 'close', conexões abertas gastam recursos do servidor e prejudicam a aplicação 

    $busca = "SELECT * FROM Pessoa";

    $resultado = $conn->query($busca);
    print_r($resultado);
    echo " <- Pós busca com SELECT <br>";
    
    
    $insercao = "INSERT INTO Pessoa (CPF, nome, idade) VALUES (\"999-888-777-66\", \"Ali Ababwa\", 20);";
    
    $conn->query($insercao);
    
    $resultado = $conn->query($busca);
    print_r($resultado);
    echo " <- Pós inserção com INSERT <br>";

    // Se recarregar a página dará erro porque o insercao não checa se o CPF "999-888-777-66" existe e CPF é uma PK, não podem haver repetidas
    
    $remocao = "DELETE FROM Pessoa WHERE CPF=\"999-888-777-66\"";

    $conn->query($remocao);

    $resultado = $conn->query($busca);
    print_r($resultado);
    echo " <- Pós remoção com DELETE <br>";

    $conn->close(); // Fechando a conexão

    echo "<br>";
    
# Extraindo dados de uma query  
    
    // Nos exeplos acima, o que era retornado para "$resultado" eram dados sobre a tabela, mas não os dados que estavam na tabela
    
    // Para extrair os dados de uma tabela usamos o método 'fetch_assoc' trasnformando-os em um array associativo

    $conn = new mysqli($host, $user, $password, $db);
    $busca = "SELECT * FROM Pessoa";
    
    $resultado = $conn->query($busca);
    $conn->close(); // Fechando conexão após query
    
    // UM RESULTADO
    echo "<strong>Um resultado só: </strong><br>";
    print_r($resultado->fetch_assoc());
    
    echo "<br> <br>";
    
    // TODOS RESULTADOS
    echo "<strong>Todos resultados: </strong><br>";
    $resultados = $resultado->fetch_all();

    foreach($resultados as $tupla) {
        print_r($tupla);
        echo "<br>";
    }
    echo "<br>";
    
    echo "O fetch_assoc e o fetch_all tira os array da string original, por isso fetch all so retorna dois resultados e por isso se eu fizer de novo fetch all não retornará nenhum array: <br>";
    print_r($resultado->fetch_all()); 

?>