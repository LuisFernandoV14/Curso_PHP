<?php

// Até agora, para iniciar todos os atributos de um objeto eu estava usando os métodos get e set, mas isso gera muito código desnecessário. Para resolver isso, usamos o método construtor.

// Toda classe tem um método construtor que não receve parâmetros e que tem o mesmo nome da classe, por isso que para criar um objeto usamos 'new NomeDaClasse()'

// Mas é possível criar um método construtor personalizado usando a palavra reservada '__construct'. Esse método é chamado automaticamente quando um objeto é instanciado, ou seja, quando usamos 'new NomeDaClasse()'

echo "<strong>Método Construtor</strong><br>";

class Pessoa {
    private $nome;
    private $idade;

    // Método construtor personalizado
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function falar() {
        echo "Olá, meu nome é " . $this->getNome() . " e eu tenho " . $this->getIdade() . " anos.<br>";
    }
}

// Definindo os atributos private sem usar get ou set e no momento da instanciação do objeto
$P1 = new Pessoa("Maria", 30);
$P2 = new Pessoa("Carlos", 40);
$P3 = new Pessoa("Ana", 22);

foreach ([$P1, $P2, $P3] as $pessoa) {
    $pessoa->falar();
}


// No PHP há uma limitação, não é possível ter mais de um método __construct na mesma classe (sobrecarga de construtor). Mas existem três métodos para contornar isso:

// Métodos estáticos de fabricação (Factory Methods)
    echo "<br><strong>Métodos Estáticos de Fabricação</strong><br>";

        class Gato {
            private $nome;
            private $maturidade;

            public function __construct($nome, $maturidade) {
                $this->nome = $nome;
                $this->maturidade = $maturidade;
            }

            public static function criarFilhote($nome) {
                return new Gato($nome, "Filhote");
            }

            public static function criarAdulto($nome) {
                return new Gato($nome, "Adulto");
            }

            public function getNome() {
                return $this->nome;
            }

            public function getMaturidade() {
                return $this->maturidade;
            }
        }

        $G1 = new Gato ("Mingau", "Filhote"); // Usa o construtor padrão
        $G2 = Gato::criarAdulto("Simba"); // Usa o método estático de fabricação
        $G3 = Gato::criarFilhote("Nina"); // Usa o método estático de fabricação

        foreach ([$G1, $G2, $G3] as $gato) {
            echo "O gato " . $gato->getNome() . " é um " . $gato->getMaturidade() . "<br>";
        }

        // Lembrando que métodos estáticos são chamados usando '::' e não '->'

// Parâmetros opcionais no construtor
    echo "<br><strong>Parâmetros Opcionais no Construtor</strong><br>";

        class Cachorro {
            private $nome;
            private $idade;

            public function __construct($nome, $idade = 0) { // idade é opcional, padrão é 0
                $this->nome = $nome;
                $this->idade = $idade;
            }

            public function getNome() {
                return $this->nome;
            }

            public function getIdade() {
                return $this->idade;
            }
        }

        $C1 = new Cachorro("Rex", 5); // idade fornecida
        $C2 = new Cachorro("Buddy"); // idade padrão (0)
        $C3 = new Cachorro("Max"); // idade padrão (0)

        foreach ([$C1, $C2, $C3] as $cachorro) {
            echo "O cachorro " . $cachorro->getNome() . " tem " . $cachorro->getIdade() . " anos<br>";
        }

// Uso de argumentos variádicos no construtor
    echo "<br><strong>Argumentos Variádicos no Construtor</strong><br>";

        class Time {
            private $nome;
            private $jogadores;

            public function __construct($nome, ...$jogadores) { // ...$jogadores permite múltiplos argumentos
                $this->nome = $nome;
                $this->jogadores = $jogadores;
            }

            public function getNome() {
                return $this->nome;
            }

            public function getJogadores() {
                return $this->jogadores;
            }
        }

        $T1 = new Time("Seleção Brasileira", "Neymar", "Alisson", "Casemiro");
        $T2 = new Time("Seleção Argentina", "Messi", "Di María");
        $T3 = new Time("Seleção França", "Mbappé", "Griezmann", "Kanté", "Pogba");

        foreach ([$T1, $T2, $T3] as $time) {
            echo "O time " . $time->getNome() . " tem os jogadores: " . implode(", ", $time->getJogadores()) . "<br>";
        }

        // O '...' se chama splat operator ou variadic functions, ele captura todos os argumentos passados e os coloca em um array indexado:
        echo "<br>Detalhes do time " . $T1->getNome() . ":<br>";
        var_dump($T1->getJogadores());
        

?>