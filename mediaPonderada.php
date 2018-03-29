<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Média Ponderada</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form method="post" action="#">
                    <legend>Média Ponderada</legend>
                    <div>
                        <label for="id_nota1">Informe a 1ªnota</label>
                        <input type="number" id="id_nota1" name="nota1">
                    </div>
                    <div>
                        <label for="id_nota2">Informe a 2ªnota</label>
                        <input type="number" id="id_nota1" name="nota2">
                    </div>
                    <div>
                        <label for="id_nota3">Informe a 3ªnota</label>
                        <input type="number" id="id_nota1" name="nota3">
                    </div>
                    <div>
                        <label for="id_nota4">Informe a 4ªnota</label>
                        <input type="number" id="id_nota4" name="nota4">
                    </div>
                    <button type="submit">Calcular Média</button>
                </form>
            </fieldset>
        <?php
            if(isset($_POST['nota1'])){
            $media;
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];
            
            $media = ($nota1*1 + $nota2*2 + $nota3*3 + $nota4*4) / (1+2+3+4);
            echo ("$media");
            }
            
        ?>
        </div>
    </body>
</html>
