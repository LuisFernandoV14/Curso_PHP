<?php

// A palavra dedicada 'abstract' delimita métodos e classes para serem abstratas
// Métodos e classes abstratas não podem ser instanciadas por objetos

// Classes abstratas são similares às interfaces, não é possível instanciá-las. A diferença se dá por ser possível definir concretamente um método abstrato (por mais contra intuitivo isso possa parecer ser)

abstract class Pessoa {
    public $nome;
    public $idade; 
    public $trabalho;

    public function exibirInfo() {
        echo "Meu nome é: {$this->nome}, tenho {$this->idade} e sou {$this->trabalho}.<br>";
    }

    public abstract function exercerProfissao();
}

// A classe abstrata acima possui atributos (interfaces não podem tem atributos), um método abstrato (exercerProfissao) que sera sobreescrito obrigatoriamente em todas subclasses e um metodo concreto (exibirInfo) que pode ser sobreescrito, caso não seja sobreescrito tem um corpo concreto

class Programador extends Pessoa {

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->trabalho = "Programador";
    }

    public function exercerProfissao() {
        echo "{$this->nome} está programando...<br>";
    }

}

class Pedreiro extends Pessoa {

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->trabalho = "Pedreiro";
    }

    public function exercerProfissao() {
        echo "{$this->nome} está construindo uma casa...<br>";
    }

}

class Enfermeiro extends Pessoa {

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->trabalho = "Enfermeiro";
    }

    public function exercerProfissao() {
        echo "{$this->nome} está cuidando de enfermos...<br>";
    }

}


$programador = new Programador("Igor", 26);
$pedreiro = new Pedreiro("Cleber", 54);
$enfermeira = new Enfermeiro("Joao", 21);

$programador->exibirInfo();
$programador->exercerProfissao();
echo "<br>";
$pedreiro->exibirInfo();
$pedreiro->exercerProfissao();
echo "<br>";
$enfermeira->exibirInfo();
$enfermeira->exercerProfissao();
echo "<br>";

?>