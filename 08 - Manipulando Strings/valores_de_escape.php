<?php

// header("Content-Type: text/plain");

// Existem alguns valores que executam funções especiais em Strings. Para isso precisamos usar aspas duplas ("") ou heredoc (<<<)

// Alguns valores de escape so funcionam caso estejam como Texto Puro ou em HTML, por isso modificamos o Header na linha 3, fazendo isso, o "<br>" não funciona corretamente

echo "Linha 1 \n Linha 2 \n Linha 3 <br>"; // Quebra de linha
echo "Nome:\tLuís Fernando <br>"; // Tabulação
echo "Barra invertida: \\ <br>"; // Barra invertida
echo "Aspas duplas: \" \" <br>"; // Aspas duplas
echo 'Aspas simples: \' \' <br>'; // Aspas simples
echo "Dólar: \$ <br>"; // Símbolo de dólar
echo "Retorno de carro: \r Retorno de carro <br>"; // Retorno de carro
echo "Alerta sonoro: \a Alerta sonoro <br>"; // Alerta sonoro
echo "Backspace: ABC\bD <br>"; // Backspace
echo "Tabulação vertical: Linha1\vLinha2 <br>"; // Tabulação vertical
echo "Form feed: Linha1\fLinha2 <br>"; // Form feed
echo "Unicode: \u{1F600} <br>"; // Caractere Unicode (Emoji de rosto sorridente)
echo "Hexadecimal: \x48\x65\x6C\x6C\x6F <br>"; // Caractere em hexadecimal (Hello)
echo "Octal: \110\145\154\154\157 <br>"; // Caractere em octal (Hello)
echo "Caractere nulo: Nulo\0Caractere <br>"; // Caractere nulo

// O nome desses valores é "valor de escpape" porque '/' se lê "escape" em inglês
// Além disso, valores de escape são tratados como um único caractere dentro de uma String 

// Mudar o Header para plain text não funciona mais, recarregar a página baixa um arquivo php com a saída dos "echo"s acima, mas a maioria não está correta. Por isso vou deixar o header como comentário e o primeiro, o oitavo e o nono echo somente sem funcionar corretamente

?>