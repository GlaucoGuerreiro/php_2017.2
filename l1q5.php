<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 05</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form action="#" method="post">
                    <div>
                        <legend>Percentual de Votos</legend>
                        <label for="id_eleitor">Informe a quantidade de eleitores do município</label>
                        <input type="number" id="id_eleitor" name="eleitor">
                    </div>
                    <div>
                        <label for="id_branco">Informe a quantidade de votos em branco</label>
                        <input type="number" id="id_branco" name="branco">
                    </div>
                    <div>
                        <label for="id_nulo">Informe a quantidade de votos nulos</label>
                        <input type="number" id="id_nulo" name="nulo">
                    </div>
                    <div>
                        <label for="id_valido">Informe a quantidade de votos válidos</label>
                        <input type="number" id="id_valido" name="valido">
                    </div>
                    <button type="submit">Calcular</button>
                    
                </form>
            </fieldset>
        
        <?php
            if(isset($_POST['eleitor'])){
            $eleitor = $_POST['eleitor'];
            $branco = $_POST['branco'];
            $nulo = $_POST['nulo'];
            $valido = $_POST['valido'];
                       
            echo "O percentual de votos em branco é de: " .$branco * 100 / $eleitor."% <br>"
                  ."O percentual de votos nulos é de: " .$nulo * 100 / $eleitor. "% <br>"
                  ."O percentual de votos válidos é de: ".$valido * 100 / $eleitor."%";
            }
        ?>
       </div>
    </body>
</html>
