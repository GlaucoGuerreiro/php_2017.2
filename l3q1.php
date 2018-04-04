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
                        <legend>Operações Aritméticas</legend>
                        <label for="id_num1">Informe o 1º valor</label>
                        <input type="number" id="id_num1" name="num1">
                    </div>
                    <div>
                        <label for="id_num2">Informe o 2º valor</label>
                        <input type="number" id="id_num2" name="num2">
                    </div>
                    
                    <button type="submit">Calcular</button>
                    
                </form>
            </fieldset>
        
        <?php
            if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
                                  
            echo "O resultado das operações matemáticas são:<br>"
            ."$num1 + $num2 = ".($num1+$num2)."<br>"
            ."$num1 - $num2 = ".($num1-$num2)."<br>"
            ."$num1 * $num2 = ".($num1*$num2)."<br>"
            ."$num1 / $num2 = ".($num1/$num2)."<br>";
            }      

        ?>
       </div>
    </body>
</html>
