<?php

// Constantes são como variáveis, salvam valores em memória, mas seus valores não podem ser mudados

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

// A classe acima define uma constante PI, que é usada para calcular a área do círculo.
// A palavra reservada 'self' é usada para acessar a constante dentro da classe. 

$circle = new Circle();
$circle->setRadius(5);

echo "Radius: " . $circle->getRadius() . "<br>";
echo "PI: " . Circle::PI . "<br>";
echo "Area: " . $circle->getArea() . "<br>";

/* Diferença entre 'self' e 'this':

    * 'this' refere-se ao objeto, à instância atual. É usado para acessar atributos e métodos do objeto.
    * 'self' refere-se à própria classe. É usado para acessar constantes e métodos estáticos da própria classe.

    * Não é possível trocar o 'self' pelo 'this', pois eles têm propósitos diferentes.

    * Importante denotar que o operador são diferentes também: '->' para 'this' e '::' para 'self'.
    * A diferença é o mesmo, '->' é usado para o indivíduo (objeto) e '::' é usado para a espécie (classe).  

*/



?>