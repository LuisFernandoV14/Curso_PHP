<?php
    // O $_SERVER é a variável global que traz informações do servidor
    
        print_r($_SERVER);
        echo "<br><br>";
    
    // Mas ela tem usos mais específicos também, que trazem informações importantes:

        print_r($_SERVER['SERVER_SOFTWARE']); // Identificação do servidor
        echo "<br><br>";
        print_r($_SERVER['SERVER_NAME']); // Hostname, DNS ou IP do servidor
        echo "<br><br>";
        print_r($_SERVER['SERVER_PROTOCOL']); // Protocolo do servidor
        echo "<br><br>";
        print_r($_SERVER['SERVER_PORT']); // Porta do servidor
        echo "<br><br>";
        print_r($_SERVER['QUERY_STRING']); // Argumentos após o '?' na URL

?>