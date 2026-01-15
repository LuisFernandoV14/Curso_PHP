<?php

/*
    Classes foram criadas com o intuito de representar objetos da vida real e para permitir uma maior reutilização de código
    Para isso existem a Herança

    O conceito de Herança em Programação Orientada a Objetos é um mecanismo que permite que uma classe (chamada de classe filha ou subclasse) herde atributos e métodos de outra classe (chamada de classe pai ou superclasse).
*/

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

// A palavra reservada para herança é o 'extends'
// Uma classe não pode herdar de duas classes diferentes (herança múltipla) diretamente

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

$animais = [];

$gato1 = new Gato();
$gato1->setNome("Cotoco");
$gato1->setNmrPatas(4);

$cachorro1 = new Cachorro();
$cachorro1->setNome("Totó");
$cachorro1->setNmrPatas(4);

$cachorro2 = new Cachorro();
$cachorro2->setNome("Cebolão");
$cachorro2->setNmrPatas(4);

$gato2 = new Gato();
$gato2->setNome("Mingau");
$gato2->setNmrPatas(4);

$animal = new Animal();
$animal->setNome("Animal Genérico");
$animal->setNmrPatas(0);

$animais[0] = $gato1;
$animais[1] = $cachorro1;
$animais[2] = $cachorro2;
$animais[3] = $gato2;
$animais[4] = $animal;

foreach ($animais as $animal) {
    echo "Nome: " . $animal->getNome() . "<br>";
    echo "Número de Patas: " . $animal->getNmrPatas() . "<br>";
    echo "Som: " . $animal->fazerSom() . "<br><br>";
}

/* Benefícios da Herança:

    * Reutilização de Código: Permite que classes filhas reutilizem código da classe pai, reduzindo a duplicação.

    * Overwriting: "Animal" define um método genérico "fazerSom", que é sobrescrito (overwritten) nas classes filhas "Gato" e "Cachorro" para fornecer implementações específicas. (Polimorfir
smo)

    * Padronização: O foreach que imprime o array de animais não checa se os animais são cachorros ou gatos, mas como o nome dos métodos são os mesmos, definidos pela superclasse, o código não gera erro 

*/

?>