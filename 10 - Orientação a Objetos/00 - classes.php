<?php

// Nesse arquivo vão ficar todas as classes que eu declarei em outros tópicos do "10 - Orientação a Objetos"

class Carro {
        private $nome;
        private $modelo;
        private $ano;
        private $tipo = "Automóvel";

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function getAno() {
            return $this->ano;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function exibirInfo() {
            echo "Tipo: " . $this->getTipo() . "<br>";
            echo "Modelo: " . $this->getModelo() . "<br>";
            echo "Ano: " . $this->getAno() . "<br>";
        }
    }

class Circle {
    const PI = 3.14159;

    private $radius;

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getArea() {
        return self::PI * ($this->radius ** 2);
    }
}

class Animal { // Superclasse

    protected $nome;
    protected $nmrPatas;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNmrPatas($nmrPatas) {
        $this->nmrPatas = $nmrPatas;
    }

    public function getNmrPatas() {
        return $this->nmrPatas;
    }

    public function fazerSom() {
        return "Som genérico de animal";
    }
}

class Gato extends Animal { // Subclasse
    
    const ESPÉCIE = "Gato";

    public function getEspecie() {
        return self::ESPÉCIE;
    }
    
    public function fazerSom() {
        return "Miau";
    }
}

class Cachorro extends Animal { // Subclasse
    
    const ESPÉCIE = "Cachorro";

    public function getEspecie() {
        return self::ESPÉCIE;
    }
    
    public function fazerSom() {
        return "Au Au";
    }
}

class Gato2 {
    private $nome;
    private $maturidade;

    public function __construct($nome, $maturidade) {
        $this->nome = $nome;
        $this->maturidade = $maturidade;
    }

    public static function criarFilhote($nome) {
        return new Gato2($nome, "Filhote");
    }

    public static function criarAdulto($nome) {
        return new Gato2($nome, "Adulto");
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMaturidade() {
        return $this->maturidade;
    }
}

class Cachorro2 {
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

interface Veiculo {
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}


class Civic implements Veiculo {
    public $velocidade;
    public $marcha;

    public function __construct() {
        $this->velocidade = 0;
        $this->marcha = "Ponto Morto";
    }

    public function acelerar($velocidade) {
        echo "O veículo acelerou até " . $velocidade . " km/h<br>";
    }

    public function frear($velocidade) {
        echo "O veículo frenou até " . $velocidade . " km/h<br>";
    }

    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha " . $marcha . "<br>";
    }
}

class Santana implements Veiculo {
    public $velocidade;
    public $marcha;

    public function __construct() {
        $this->velocidade = 0;
        $this->marcha = "Ponto Morto";
    }

    public function acelerar($velocidade) {
        echo "Santana acelerou até " . $velocidade . " km/h<br>";
    }

    public function frear($velocidade) {
        echo "Santana frenou até " . $velocidade . " km/h<br>";
    }

    public function trocarMarcha($marcha) {
        echo "Santana engatou a " . $marcha . " marcha<br>";
    }
}

trait Mensagem {
    public function exibirMensagem($mensagem) {
        echo "Mensagem: " . $mensagem . "<br>";
    }
}

class Notificador {
    use Mensagem;

    public function notificarUsuario($usuario, $mensagem) {
        echo "Notificando " . $usuario . ":<br>";
        $this->exibirMensagem($mensagem);
    }
}

class Alerta {
    use Mensagem;

    public function enviarAlerta($nivel, $mensagem) {
        echo "Alerta Nível " . $nivel . ":<br>";
        $this->exibirMensagem($mensagem);
    }
}

abstract class Pessoa3 {
    public $nome;
    public $idade; 
    public $trabalho;

    public function exibirInfo() {
        echo "Meu nome é: {$this->nome}, tenho {$this->idade} e sou {$this->trabalho}.<br>";
    }

    public abstract function exercerProfissao();
}

class Programador extends Pessoa3 {

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->trabalho = "Programador";
    }

    public function exercerProfissao() {
        echo "{$this->nome} está programando...<br>";
    }

}

class Pedreiro extends Pessoa3 {

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->trabalho = "Pedreiro";
    }

    public function exercerProfissao() {
        echo "{$this->nome} está construindo uma casa...<br>";
    }

}

class Enfermeiro extends Pessoa3 {

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->trabalho = "Enfermeiro";
    }

    public function exercerProfissao() {
        echo "{$this->nome} está cuidando de enfermos...<br>";
    }

}


?>