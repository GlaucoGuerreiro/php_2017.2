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
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form action="#" method="post">
                    <div>
                        <legend>Consumo Médio</legend>
                        <label for="id_distancia">Informe a distância percorrida</label>
                        <input type="number" id="id_distancia" name="distancia">
                    </div>
                    <div>
                        <label for="id_litros">Informe os litros consumidos</label>
                        <input type="number" id="id_litros" name="litros">
                    </div>
                    <button type="submit">Calcular</button>
                    
                </form>
            </fieldset>
        
        <?php
            if(isset($_POST['distancia'])){
            $distancia = $_POST['distancia'];
            $litros = $_POST['litros'];
            $resp = $distancia / $litros;
            echo ("O consumo médio de combustível é: $resp KM/Litros");
            }
        ?>
       </div>
    </body>
</html>
