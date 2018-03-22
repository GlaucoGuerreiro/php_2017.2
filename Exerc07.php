<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Exercício 02 / Exercicio 07</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <!-- Efetuar a leitura de dois números inteiros e apresentar a relação existente entre
eles, ou seja:
a. O primeiro é maior que o segundo
b. São iguais
c. O segundo maior que o primeiro -->
        <div class="container">
            <div class="row">
                <form method="POST" name="Ex07" action="#">
                    <legend>Relação entre Números</legend>
                    <fieldset>
                    <div class="form-groups"> 
                         <label for="id_num1">Digite o primeiro número</label>
                         <input type="number" id="id_num1" name="num1">
                    </div>
                     <div class="form-groups">
                         <label for="id_num2">Digite o segundo número</label>
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
               
                if($num1 > $num2){
                   echo("O Primeiro número é maior que o segundo");
                }elseif($num1 == $num2){
                    echo("Os números são iguais");
                }else{
                    echo("O Segundo número é maior que o primeiro");
                }
                          
                }
                                                
                ?>
            </div>    
        </div>
    </body>
</html>