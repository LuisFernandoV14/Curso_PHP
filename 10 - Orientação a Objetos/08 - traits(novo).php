<?php

// As traits (traços) permitem o reuso do código sem hierarquia de classes, ou seja, sem herança
// Permitindo usar os métodos da classe que foi feita a trait
// A palavra reservada para definir uma trait é 'trait', para usar uma trait é 'use'
// É possível usar várias traits em uma mesma classe

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

$notificador = new Notificador();
$notificador->notificarUsuario("João", "Seu pedido foi enviado com sucesso!");

echo "<br>";

$alerta = new Alerta();
$alerta->enviarAlerta("Crítico", "Uso de CPU acima de 90%!");


?>