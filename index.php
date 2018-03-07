<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Hello World</title>
    </head>
    <body>
        <h1>Minha primeira página em PHP com código básico "Olá Mundo"</h1>
        <code>
            <!-- para iniciarmos um bloco de código PHP usamos as tags abaixo -->
            <?php
                # para declararmos uma variável é necessário usar o símbolo $
                $hello = "Olá mundo PHP";
                $outraMsg = 'Estamos começando a estudar o PHP'."<br>";
                $terceiraMsg = "O valor da primeira msg é: $hello<br>";

                // Comando utilizado para imprimir (saída) na tela
                echo($hello."<br>");
                echo($outraMsg);
                echo $terceiraMsg;

                /* 
                    Detalhes importantes:

                    Em PHP sempre será necessário iniciar uma variável com $.
                    Para que o servidor entenda os códigos PHP os arquivos devem ser salvos com a extensão .php.
                */
            ?>
        </code>
    </body>
</html>       