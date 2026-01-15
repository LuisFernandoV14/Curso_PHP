<?php

// Uma classe é como um tipo de dado personalizado que agrupa outros dados. 
// A palavra reservada para a criação de clsases no PHP é 'class'
// Por convenção, o nome das classes começam com letra maiúscula

// Exemplo 1: 

    class Pessoa {
        public $nome;
        public $idade;

        function falar() {
            echo "Olá, meu nome é $this->nome e eu tenho $this->idade anos. <br>";
        }
    }

    // Para uma atributo ser reconhecido dentro de uma classe precisamos definir seu escopo de acesso. 'public' define que esse atributo pode ser acessado de qualquer lugar do código

    // Dentro de uma classe variáveis e funções mudam de nome. Respectivamente se tornam atributos e métodos.

    // Variáveis que instanciam uma classe são chamadas de objetos
    // A palavra reservada para instanciar uma classe é 'new'

    $P1 = new Pessoa();

    $P1->nome = "João";
    $P1->idade = 25;
    $P1->falar();

    // Podemos acessar atributos e métodos de um objeto através do operador '->'

echo "<br>";

// Exemplo 2:

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

    // A classe 'carro' é mais complexa. 'private' define que o atributo só pode ser acessado dentro da própria classe.

    $C1 = new Carro();

    // C1->modelo = "Sedan"; causaria um erro, pois 'modelo' é private, não pode ser acessado fora da classe
    // Mas 'exibirInfo' é public, então pode ser acessado fora da classe.

    // Atributos private são mais seguros, o uso deles é recomendado. Mas eles não podem ser inacessíveis sempre, por isso existem os métodos getters e setters.
    
    $C1->setNome("Santana");
    $C1->setModelo("Sedan");
    $C1->setAno(2006);

    // Getters e setters são métodos públicos que permitem acessar e modificar atributos privados.

    $C1->exibirInfo();

echo "<br>";

// Explicando o 'this'

    /* Nas classes Pessoa e Carro foi usado o '$this' para acessar atributos e métodos da própria classe.
    * '$this' é uma referência ao objeto atual, ou seja, ao objeto que está chamando o método.
    * É uma palavra para substituir o nome do objeto dentro da própria classe.
    * Usando o objeto C1 por exemplo, é como se o método 'exibirInfo' fosse escrito assim:  
        public function exibirInfo() {
            echo "Tipo: " . $C1->getTipo() . "<br>";
            echo "Modelo: " . $C1->getModelo() . "<br>";
            echo "Ano: " . $C1->getAno() . "<br>";
        } 
    */
?>