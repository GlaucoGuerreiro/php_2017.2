<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 01</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form action="#" method="post">
                    <div>
                        <legend>Calcular preço com desconto</legend>
                        <label for="id_preco">Preço do produto</label>
                        <input type="number" id="id_preco" name="preco">
                    </div>
                    <button type="submit">Calcular</button>
                    
                </form>
            </fieldset>
        
        <?php
            if(isset($_POST['preco'])){
            $preco = $_POST['preco'];
            $res = $preco - ($preco * 0.09);
            echo ("O valor com desconto de 9% é: $res");
            }
        ?>
       </div>
    </body>
</html>
