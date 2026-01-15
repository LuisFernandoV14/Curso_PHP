<?php

require "C:\\xampp\htdocs\Curso_PHP\\10 - Orientação a Objetos\\00 - classes.php";

// Existem algun métodos nativos para verificar classes e objetos:
    
    // Verificando classes:
        echo "A classe 'Animal' existe? ";
        var_export(class_exists("Animal"));
        
        echo "<br>A classe 'Alien' existe? "; 
        var_export(class_exists("Alien"));

echo "<br>";

    // Verificando metodos de uma classe:
        echo "<br>Métodos da classe 'Animal': ";
        var_export(get_class_methods("Animal"));
        echo "<br>Métodos da subclasse 'Gato': ";
        var_export(get_class_methods("Gato"));
    
echo "<br>";
    
    // Verificando atributos de uma classe
        echo "<br>Atributos da classe 'Pessoa': ";
        var_export(get_class_vars("Pessoa3"));
        echo "<br>Atributos da subclasse 'Programador': ";
        var_export(get_class_vars("Programador"));

echo "<br>";
$idade = 90;
$p1 = new Programador("Carlos", $idade);

    // Verificando se uma variável é um objeto:
        echo "<br>'idade' é um objeto? ";
        var_export(is_object($idade));
        echo "<br>p1 é um objeto? ";
        var_export(is_object($p1));

echo "<br>";

    // Verificando a classe de um objeto:
        echo "<br>Qual é a classe de p1? ";
        var_export(get_class($p1));
        
echo "<br>";

    // Verificando se um método existe:
        echo "<br>Existe o método 'exercerProfissao()' em 'Programador'? ";
        var_export(method_exists($p1, "exercerProfissao"));
        echo "<br>Existe o método 'falar()' em 'Programador'? ";
        var_export(method_exists($p1, "falar"));


          
?>