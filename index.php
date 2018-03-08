<!DOCTYPE html>
<!--
    Autor: Glauco Guerreiro
    Data: 08-03-2018
    Finalidade: Projeto de aprendizado PHP 
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            # Quando queremos definir uma váriavel devemos utilizar o símbolo $
            $variavel = "Variável Exemplo";
            # Porém, quando queremos definir uma variável de variável utilizamos a simbologia $$
            $$variavel = 8;
           
            echo ("O valor da $variavel é " . $$variavel);
            echo ("<br> O valor da $variavel é {$$variavel}");
            
            echo "<br>";
            var_dump (boolval(0));
             echo "<br>";
            var_dump (boolval(1));
        ?>
    </body>
</html>
