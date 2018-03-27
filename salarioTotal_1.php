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
            
            <fieldset>
                <form method="post" action="#">
                    <legend>Salário Total</legend>
                    <div>
                        <label for="id_nome">Nome Funcionário</label>
                        <input type="text" id="id_nome" name="nome">
                    </div>
                    <div>
                        <label for="id_salario">Salário</label>
                        <input type="number" id="id_salario" name="salario">
                    </div>
                    <div>
                        <label for="id_vendas">Vendas efetuadas</label>
                        <input type="number" id="id_vendas" name="vendas">
                    </div>
                    <button type="submit">Calcular</button>
                </form>
            </fieldset>
        <?php
            if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
            $salario = $_POST['salario'];
            $vendas = $_POST['vendas'];
            $salTotal = $salario + ($vendas * 0.15);
            echo ("O funcionário: $nome, possui o salário fixo de R$ $salario e receberá o total de R$ $salTotal.");
           
            }
        ?>
    </body>
</html>
