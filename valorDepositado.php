<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Valor Depositado</title>
    </head>
    <body>
        <div id="container">
            
            <fieldset>
                <form method="post" action="#">
                    <legend>Rendimentos após o mês</legend>
                    <div>
                        <label for="id_valor">Informe o valor depositado</label>
                        <input type="number" id="id_valor" name="valor">
                    </div>
                    <button type="submit">Calcular</button>
                </form>
            </fieldset>
        <?php
            if(isset($_POST['valor'])){
            $valor = $_POST['valor'];
            $rendimentos = $valor * 1.07;
            echo (" O valor dos rendimentos após o mês é de: $rendimentos,00");
           
            }
        ?>
    </body>
</html>
