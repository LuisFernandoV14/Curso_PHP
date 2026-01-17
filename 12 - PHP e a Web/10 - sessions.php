<?php

// Usando sessions podemos criar variáveis que perduram em diferentes páginas e por diferentes visitas ao mesmo site
// A session usa cookies para seu funcionamento
// Provavelmente o recurso mais utilizado, junto com o cookie 

// As sessions são salvas em arquivos no computador que estamos ou no servidor da aplicação
// Os arquivos são salvos em php.ini na configuração 'session.save_path' (dá pra achar pelo XAMPP)

// Sessions podem ser salvas em dois formatos, o próprio do PHP e também o Web Distributed Data eXchange (WDDX)

session_start(); // Inicializa as sessões em uma página

$_SESSION['nome'] = "Alan"; // Como atribuir um valor à sessão

print_r($_SESSION); // Contém os dados da sessão

session_unset();   // Limpa as variáveis da sessão atual
session_destroy(); // Destrói o arquivo no servidor

?>