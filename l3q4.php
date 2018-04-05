<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 04</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form action="#" method="post">
                    <div>
                        <legend>Ordenação Decrescente</legend>
                        <label for="id_num1">Informe o 1º número</label>
                        <input type="number" id="id_num1" name="num1">
                    </div>
                    <div>
                        <label for="id_num2">Informe o 2º número</label>
                        <input type="number" id="id_num2" name="num2">
                    </div>
                    <div>
                        <label for="id_num3">Informe o 3º número</label>
                        <input type="number" id="id_num3" name="num3">
                    </div>
                                     
                    <button type="submit">Ordenar</button>
                    
                </form>
            </fieldset>
        
        <?php
            if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            
            if($num1 > $num2 && $num1 >$num3){
                if($num2 > $num3){
                    echo "$num1 $num2 $num3";
                }else{
                    echo "$num1 $num3 $num2";
                }
            }elseif($num3 > $num1 && $num3 > $num2){
                if($num1 > $num2){
                    echo "$num3 $num1 $num2";
                }else{
                    echo "$num3 $num2 $num1";
                }
            }else{
                echo "$num2 $num1 $num3";
            }
       
                  } 
        ?>
       </div>
    </body>
</html>
