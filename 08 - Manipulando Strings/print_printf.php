<?php

// Em PHP existem as funções print e printf para exibir Strings formatadas

    // print age de forma similar ao echo
        print("Olá Mundo! <br>");

        // interpolar strings com print funciona do mesmo jeito que com echo (ocm ou sem chaves)
    
    // printf permite formatar Strings de forma mais avançada, usando especificadores de formato
       
        // printf vem de linguagens mais antigas, é bem parecida, se não igual, ao printf do C e ao System.out.printf do Java
        $dinheiro = 1500.99999;
        printf("Eu tenho %d anos e R$ %.2f\$ no meu bolso. <br>", 10, $dinheiro); 

        // Aqui rolou uma coisa diferente. Diferente do printf do C esse printf arredondou o valor de 1500.99 para 1501.00 

?>