<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Exercício 02 / Exercicio 03</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <!-- Implemente um programa que leia dois valores inteiros e verificar se o primeiro é
múltiplo do segundo, seu programa deverá exibir a mensagem: “São múltiplos” ou
“Não são múltiplos” dependendo da condição. -->
        <div class="container">
            <div class="row">
                <form method="POST" name="Ex03" action="#">
                <legend>Números Múltiplos</legend>
                <fieldset>
                    <div class="form-group">
                        <label for="id_num1">Digite o primeiro inteiro</label>
                        <input type="number" id="id_num1" name="num1">
                    </div>
                    <div class="form-group">
                        <label for="id_num2">Digite o segundo Inteiro</label>
                        <input type="number" id="id_num2" name="num2">
                    </div>
                </fieldset>
                <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="row">
                <?php
                    if(isset($_POST['num1'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    
                    if($num1%$num2 == 0){
                        echo("$num1 é múltiplo de $num2");
                    }else{
                        echo("$num1 não é múltiplo de $num2");
                    }
                    }
                ?>
            </div>    
        </div>
    </body>
</html>
