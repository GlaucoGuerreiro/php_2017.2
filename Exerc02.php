<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 02</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <!-- Elabore um algoritmo para ler um valor inteiro e informar, através de uma
mensagem se este valor é um número par ou ímpar. -->
        <div class="container">
            <div class="rows">
                <form method="POST" name="Ex02" action="#">
                <legend>Par ou Ímpar?</legend>
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
                if($inteiro%2 == 0){
                    echo("O número digitado é par");
                }else{
                    echo("O número digitado é impar");
                }
                }
                ?>
            </div>    
        </div>
    </body>
</html>
