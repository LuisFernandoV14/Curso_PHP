<?php

// Aritméticos:

    $som = 2 + 2; // Soma (+)
    $sub = 2 - 2; // Subtração (-)
    $div = 2 / 2; // Divisão (/)
    $mul = 2 * 2; // Multiplicação (*)
    $mod = 2 % 2; // Módulo (%)
    $exp = 2 ** 2; // Exponenciação (**)

    /* 
        * Caso tenha esquecido o que é módulo:
        * É uma divisão, mas o resultado guardado é o resto da divisão.
        * 14 % 7 = 0. Porque o resto da divisão 14 / 7 é 0.
        * OBS: As operações aritiméticas seguem o PEMDAS.
    */


// Concatenação:

    $con = "Hello" . " " .  "World"; // Concatenação (.)

    echo 
    $som . "<br>" . 
    $sub . "<br>" . 
    $div . "<br>" . 
    $mul . "<br>" . 
    $mod . "<br>" . 
    $exp . "<br>" . 
    $con . "<br>";

    /* Não tem limite para de quantas expressões podem ser concatenadas. */ 
    /* Dois números concatenados viram uma String */

// Incremento e Decremento:
    $s = 11;
    $l = 15;

    $s++; // Incrementa $s em 1 (++)
    $l--; // Decrementa $l em 1 (--)

    echo
    $s . "<br>" . 
    $l . "<br>";

// Comparação:

    // Toda comparação resultará em true ou false

    $i = 1 == 1; // Igualdade (==)
    $id = 1 === 1; // Identidade (===)  
    $d = 1 != 1; // Diferença (!=)
    $nid = 1 !== 1; // Não identadade (!==)
    $ma = 1 > 1; // Maior que (>)
    $me = 1 < 1; // Menor que (<)
    $mai = 1 >= 1; // Maior ou igual a (<=)
    $mei = 1 <= 1; // Menor ou igual a (>=)

    // O operador de Identidade (===) retorna true se dois valores forem literalmente idênticos, incluindo seus tipos

// Lógicos

    // Servem para encadear várias operações
    
    $and = $i && $id; // Operador AND (e) (&&), retorna true se todas forem true e false se uma for false
    $or = $d || $nid; // Operador OR (ou) (||), retorna true se uma for verdadeira e false se todas forem false
    $not = !$id; // Operador NOT (não) (!), inverte o valor de um boolean, de true para false e de false para true

// Casting

    // Operadores de Conversão (ou de Cast) servem para transformar um tipo em outro
    // Os mais utilizados são para converter strings em números

    $e1 = (int) "14"; // String vira int 
    $e2 = (float) "12.6"; // String vira float
    $e3 = (bool) "false"; // String vira bool  
    $e4 = (string) true; // Bool vira string

// Atribuição

    // Servem para atribuir valor a uma variável

    $igual = 0;
    echo $igual . "<br>";

    $maigual = 0;
    $maigual += 1; 
    echo $maigual . "<br>";
    
    $menigual = 3;
    $menigual -= 1;
    echo $menigual . "<br>";

    $digual = 8;
    $digual /= 2;
    echo $digual . "<br>";

    $vigual = 2.5;
    $vigual *= 2;
    echo $vigual . "<br>";

    $migual = 20;
    $migual %= 14;
    echo $migual . "<br>";

    // Usar um operador de atribuição junto de um operador aritimetico (Ex: +=) sem ter inicializado a variavel antes dá erro

// Ternário

    // Consiste de uma estrutura if/else resumida a um operador '?'
    
    echo (14 > 13) ? "sim" . "<br>" : "não" . "<br>"; // "Quatorze é maior que treze? Se sim, echo "sim", se não, echo "não"; 

?>