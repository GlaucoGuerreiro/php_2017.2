<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 03</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form action="#" method="post">
                    <div>
                        <legend>Cálculo do Combustível Gasto</legend>
                        <label for="id_litros">Informe os litros gastos</label>
                        <input type="number" id="id_litros" name="litros">
                    </div>
                    <div>
                        <label for="id_distancia">Informe os quilômetros percorridos</label>
                        <input type="number" id="id_distancia" name="distancia">
                    </div>
                    <div>
                        <label for="id_preco">Informe o preço do litro do combustível</label>
                        <input type="number" id="id_preco" name="preco">
                    </div>
                    <button type="submit">Calcular</button>
                    
                </form>
            </fieldset>
        
        <?php
            if(isset($_POST['litros'])){
            $litros = $_POST['litros'];
            $distancia = $_POST['distancia'];
            $preco = $_POST['preco'];
            $resp = $distancia / $litros * $preco;
            
            echo ("O gasto com combustível é de: $resp reais");
            }
        ?>
       </div>
    </body>
</html>
