<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Salario Total</title>
    </head>
    <body>
        <div id="container">
            <h1>Salário Base: R$800,00</h1>
            <fieldset>
                <form method="post" action="#">
                    <legend>Salário Total</legend>
                    <div>
                        <label for="id_vendas">Informe a qtd. carros vendidos</label>
                        <input type="number" id="id_vendas" name="vendas">
                    </div>
                    <button type="submit">Calcular</button>
                </form>
            </fieldset>
        <?php
            if(isset($_POST['vendas'])){
            $vendas = $_POST['vendas'];
            $salBase = 800;
            $comissao = 300;
            $salTotal = $salBase + ($vendas*$comissao);
            echo ("$salTotal");
           
            }
        ?>
    </body>
</html>
