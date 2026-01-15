<?php

// Interfaces são classes que definem o nome de métodos, mas não definem e nem os implementam. 
// Diferente da herança, uma classe pode implementar várias interfaces ao mesmo tempo

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

// Uma interface não pode implementar atributos e nem definir concretamente o funcionamento de um método

$meuCarro = new Civic();

$meuCarro->acelerar(10);
$meuCarro->trocarMarcha(1);
echo "<br>";

$meuCarro->acelerar(20);
$meuCarro->trocarMarcha(2);
echo "<br>";

$meuCarro->frear(10);
$meuCarro->trocarMarcha(1);
echo "<br>";

$meuCarro->frear(0);
$meuCarro->trocarMarcha("Ponto Morto");
echo "<br>";

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

$meuCarro = new Santana();

$meuCarro->trocarMarcha("primeira");
$meuCarro->acelerar(100);
$meuCarro->trocarMarcha("segunda");
$meuCarro->trocarMarcha("terceira");
$meuCarro->trocarMarcha("quarta");
$meuCarro->trocarMarcha("quinta");
echo "<br>";

// Perceba que ambas as classes "Civic" e "Santana" implementam a interface "Veiculo", e que os métodos não trocam de nome, mas a implementação deles é diferente, o 'echo' presente em cada método é diferente de classe para classe. Isso é polimorfismo através de interfaces. 

?>