<!DOCTYPE html>
<!--
Desenvolva um programa para efetuar a leitura de um valor inteiro positivo ou negativo e apresentar
o número lido como sendo um valor positivo, ou seja, o programa deverá apresentar o módulo de um número
fornecido
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 05</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div>
                <form action="#" method="get">
                    <fieldset>
                        <legend>Módulo do Número</legend>
                        <label for="id_numero">Número</label>
                        <input type="number" id="id_numero" name="numero" placeholder="Informe um número positivo ou negativo" style="width:400px;">
                    </fieldset>
                <input type="submit" value="Enviar">
            </div>
            <div>
                <h3>Resultado:</h3>
                <?php
                    if(isset($_GET['numero'])){
                       $num = $_GET['numero'];
                       if($num > -1){
                            echo($num);
                       }else{
                            $num = $num * (-1);
                            echo($num);
                       }
                    }
                ?>
                
            <!-- <p><?= isset($numero) ? $numero:"" ?></p> - este comando será semelhante ao echo porém, será colocado fora do codigo php -->
            </div>
        </div>
    </body>
</html>
