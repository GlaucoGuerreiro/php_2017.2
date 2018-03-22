<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Exercício 02 / Exercicio 04</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <!-- Desenvolva um programa para ler um valor inteiro e apresentar:
a. Exibir a mensagem “número negativo” se n &lt; 0.
b. Exibir a mensagem “zero” se n = 0.
c. Exibir a mensagem “número positivo” se n &gt; 0. -->
        <div class="container">
            <div class="rows">
                <form method="POST" name="Ex04" action="#">
                <legend>Positivo, Negativo ou Nulo?</legend>
                <fieldset>
                    <label for="id_inteiro">Digite um número Inteiro</label>
                    <input type="number" id="id_inteiro" name="id_inteiro">
                </fieldset>
                <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="rows">
                <?php
                if(isset($_POST['id_inteiro'])){
                $inteiro = $_POST['id_inteiro'];
                if($inteiro < 0){
                    echo("O número digitado é negativo");
                }elseif($inteiro > 0){
                    echo("O número digitado é positivo");
                }else{
                    echo("O número digitado é nulo; Zero");
                }
                }
                ?>
            </div>    
        </div>
    </body>
</html>
