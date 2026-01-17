<?php 

class Carro {

    private $modelo;
    private $preco;

    public function __construct($modelo = "", $preco = 0) {
        $this->modelo = $modelo;
        $this->preco = $preco;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function carroCadastrado() {
        if ($this->modelo != "" && $this->preco >= 0) {
            return "Carro cadastrado com sucesso! <br>Modelo: {$this->getModelo()} <br>Preço: {$this->getPreco()} <br>";
        } else return "Carro não foi cadastrado, informações inválidas";
    }
 
}

print_r($_POST);
$C1 = new Carro($_POST['modelo'], $_POST['preco']);

?>

<h3> <?= $C1->carroCadastrado() ?> </h3>


<br>

Perceba que na URL não estão as variáveis usadas no $_POST