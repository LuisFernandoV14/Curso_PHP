<?php

// DAO é abrevialçao de Data Access Object
// É o padrão de código utilizado para persistência de dados, utilizada apenas em abordagem orientada a objetos

// Em projetos grandes há uma classe DAO que será responsável pelas interações ao DB
// Atua como um intermediário de aplicação e banco de dados

// Separa e regra de negócio da interação com banco de dados

# Exemplo de criação DAO:

    // Para cada classse DAO é necessário uma classe PO (plain object) classes: Pessoa, PessoaDAO
    // Também é essenciao que uma classe DAO implemente uma interface DAO com as operações a ser realizadas no Banco de Dados, normalmente um CRUD (Create, Read, Update, Delete)

    interface PessoaDAOInterface {
        public function create(Pessoa $pessoa);
        public function findAll(); 
        public function close();
    }

    class Pessoa {
        private String $CPF;
        private String $nome;
        private int $idade;

        public function __construct(String $CPF, String $nome, int $idade) {
            $this->CPF = $CPF;
            $this->nome = $nome;
            $this->idade = $idade;
        }

        # Getters e Setters 
            public function getCPF() {
                return $this->CPF;
            }

            public function getNome() {
                return $this->nome;
            }

            public function getIdade() {
                return $this->idade;
            }

            public function setCPF(String $CPF) {
                $this->CPF = $CPF;
            }

            public function setNome(String $nome) {
                $this->nome = $nome;
            }

            public function setIdade(int $idade) {
                $this->idade = $idade;
            }
    }

    class PessoaDAO implements PessoaDAOInterface {

        private PDO $conn;

        public function __construct(PDO $conn) {
            $this->conn = $conn;
        }

        public function create(Pessoa $pessoa) {

            $CPF = $pessoa->getCPF();
            $nome = $pessoa->getNome();
            $idade = $pessoa->getIdade();

            $stmt = $this->conn->prepare("INSERT INTO Pessoa (CPF, nome, idade) VALUES (:CPF, :nome, :idade)");

            $stmt->bindParam(":CPF", $CPF);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":idade", $idade);

            $stmt->execute();
        }
       
        public function findAll() {
            $stmt = $this->conn->prepare("SELECT * FROM Pessoa");
            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($resultados as $tupla) {
                print_r ($tupla);
                echo "<br>";
            }
            echo "<br>";
        }

        public function close() {
            $this->conn = null;
        }
       
    }

// Dá pra ver que só o que mexe no banco de dados é a classe DAO e que ela só implementa métodos que estão em sua interface

# Exemplo de uso DAO:

    $host = "localhost";
    $user = "PHPeSQL";
    $password = "123321";
    $db = "php_curso";

    $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $password); // Estabelece conexão

    $p1 = new Pessoa ("444.444.444-14", "Handsome Jack", 37); // Cria um plain object
    $pessPDO = new PessoaDAO($conn); // Cria um DAO
    
    echo "<strong>Antes do INSERT</strong><br>";
    $pessPDO->findAll();

    $pessPDO->create($p1);

    echo "<strong>Depois do INSERT</strong><br>";
    $pessPDO->findAll();


// Somente o DAO acessou o banco de dados. 
// Importante notar que o 'bindParam' so aceita variáveis, então "getNome" no lugar de $nome (na linha 76) resultaria em erro. Colocar o nome em aspas direto também daria erro.
// Usar DAO gera uma camada de segurança a mais.



?>