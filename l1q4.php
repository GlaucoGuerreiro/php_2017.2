<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 04</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form action="#" method="post">
                    <div>
                        <legend>Cálculo do salário Total</legend>
                        <label for="id_vendas">Informe a quantidade de carros vendidos</label>
                        <input type="number" id="id_vendas" name="vendas">
                    </div>
                    <button type="submit">Calcular</button>
                    
                </form>
            </fieldset>
        
        <?php
            if(isset($_POST['vendas'])){
            define ("sal",800);
            define ("comissao", 300);
            $vendas = $_POST['vendas'];
            $total = sal + ($vendas * comissao);
            
            echo ("O Salário total é de: $total reais");
            }
        ?>
       </div>
    </body>
</html>
