<?php

// Existem algumas funções nativas do PHP para facilitar operações comuns com Arrays

    // Operações que funcionam em arrays associativos e indexados

        // Reduzindo um array a um único valor

            // 'array_reduce()' reduz um array a um único valor. Essa função recebe no mínimo dois parâmetros. O primeiro é o array que será reduzido a um só valor. O segundo é a "regra" que ele usa para a redução, uma função de callback, a função tem que ter 2 parâmetros e retornar um só valor para funcionar. Parece complicado:
            
                function soma($a, $b) {
                    return $a + $b;
                }

                // 'soma' é uma função com 2 parâmetros que retorna um valor.

                $arr = [1, 2, 3, 4, 5];

                $resultado = array_reduce($arr, 'soma'); // A função tem que ser passada como string

                print_r($arr);
                echo "<br>Resultado da soma: $resultado <br><br>"; // Resultado da soma: 15

        
        // Buscando valor em um array

            // 'in_array()' verifica se um valor existe em um array. Recebe 2 parâmetros, o primeiro é o valor a ser buscado e o segundo é o array onde será feita a busca. Retorna true ou false

                $arr2 = ['maçã', 'banana', 'laranja', 'uva'];

                $existe = in_array('banana', $arr2); // Verifica se 'banana' existe no array

                echo "O valor 'banana' existe no array? ";
                var_export($existe);


        // Ordem crescente e decrescente

            // 'sort()' ordena um array em ordem crescente. Modifica o array original

                $numeros = [4, 2, 8, 6, 5, 1, 3, 7];

                echo "<br><br>Array original: ";
                print_r($numeros);

                sort($numeros); // Ordena o array em ordem crescente

                echo "<br>Array ordenado em ordem crescente: ";
                print_r($numeros);
            
            // 'rsort()' ordena um array em ordem decrescente. Modifica o array original

                rsort($numeros); // Ordena o array em ordem decrescente

                echo "<br>Array ordenado em ordem decrescente: ";
                print_r($numeros);

            // Em ambos os casos, strings e caracteres são ordenados com base na tabela ASCII do PHP (alfabética e numérica)


        // Invertendo um array
        
            // 'array_reverse()' inverte a ordem dos elementos de um array. Retorna um novo array com os elementos invertidos

                $letras = ['a', 'b', 'c', 'd', 'e'];

                echo "<br><br>Array original: ";
                print_r($letras);

                $invertido = array_reverse($letras); // Inverte o array

                echo "<br>Array invertido: ";
                print_r($invertido);

        
        // Aleatorizando um array

            // 'shuffle()' embaralha os elementos de um array. Modifica o array original

                $cores = ['vermelho', 'verde', 'azul', 'amarelo', 'roxo'];

                echo "<br><br>Array original: ";
                print_r($cores);

                shuffle($cores); // Embaralha o array

                echo "<br>Array embaralhado: ";
                print_r($cores);

        
        // Somando valores de um array

            // 'array_sum()' soma todos os valores de um array. Retorna a soma

                $valores = [10, 20, 30, 40, 50];

                $soma = array_sum($valores); // Soma os valores do array

                echo "<br><br>Array de valores: ";
                print_r($valores);
                echo "<br>Soma dos valores: $soma";


        // Diferença entre arrays

            // 'array_diff()' compara dois ou mais arrays e retorna um array com os valores que estão no primeiro array, mas não estão nos outros arrays. Retorna um novo array com a diferença

                $array1 = [1, 2, 3, 4, 5];
                $array2 = [4, 5, 6, 7, 8];

                $diferenca = array_diff($array1, $array2); // Compara os dois arrays

                echo "<br><br>Array 1: ";
                print_r($array1);
                echo "<br>Array 2: ";
                print_r($array2);
                echo "<br>Diferença (valores em Array 1 que não estão em Array 2): ";
                print_r($diferenca);
            
            // array_diff() aceita parâmetros ilimitados.
        
            
        // Unindo arrays

            // 'array_merge()' une dois ou mais arrays em um só. Retorna um novo array com os elementos unidos

                $arr1 = [1, 2, 3];
                $arr2 = [4, 5, 6];

                $unido = array_merge($arr1, $arr2); // Une os dois arrays

                echo "<br><br>Array 1: ";
                print_r($arr1);
                echo "<br>Array 2: ";
                print_r($arr2);
                echo "<br>Array unido: ";
                print_r($unido);
    
    // Operações em Arrays Associativos

        // Ordenando por chave

            // 'ksort()' ordena um array associativo pela chave, mantendo a associação entre chave e valor. Modifica o array original

                $arrass = [
                    'c' => 3,
                    'a' => 1,
                    'd' => 4,
                    'b' => 2
                ];

                echo "<br><br>Array associativo original: ";
                print_r($arrass);

                ksort($arrass); // Ordena o array pela chave
                echo "<br>Array associativo ordenado por chave: ";
                print_r($arrass);

// Importante mencionar que com exceção do 'array_inverse()', 'array_sum()', 'array_diff()' e do 'array_merge()' todas as funções acima modificam diretamente o array original, ou seja, não retornam um novo array.

?>