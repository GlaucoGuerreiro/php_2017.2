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
                        <legend>Valor Absoluto</legend>
                        <label for="id_num1">Informe um valor</label>
                        <input type="number" id="id_num1" name="num1">
                    </div>
                                     
                    <button type="submit">Verificar</button>
                    
                </form>
            </fieldset>
        
        <?php
            if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            if($num1 < 0){
                echo "O valor absoluto é: ".($num1 * (-1));
            }else{
                echo "O valor absoluto é: $num1";
            }
           }      

        ?>
       </div>
    </body>
</html>
