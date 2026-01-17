
<?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    /* <?= ... ?> é uma short tag para impressão, ela imprime o que tá entre e funciona igual a <?php echo ... ?> */ 

    print_r($_GET);
?>


<h3> O seu nome é <?= $nome ?> e você tem <?php echo $idade ?> anos </h3> 

Nessa página você vai ver que as variáveis estão na URL, mudando pela URL muda o nome e idade que aparecem nessa página
 