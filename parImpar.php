<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Par ou Ímpar</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form method="post" action="#">
                    <legend>Par ou Ímpar</legend>
                    <div>
                        <label for="id_num1">Informe um número</label>
                        <input type="number" id="id_num1" name="num1">
                    </div>
                    <button type="submit">Verificar</button>
                </form>
            </fieldset>
        <?php
            if(isset($_POST['num1'])){
            $numero = $_POST['num1'];
            
            if($numero%2 == 0){
                echo ("O número é par");
            }else{
                echo ("O número é ímpar");
            }
            }
        ?>
    </body>
</html>
