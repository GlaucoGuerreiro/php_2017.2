<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 05</title>
    </head>
    <body>
        <div id="container">
            <fieldset>
                <form action="#" method="post">
                    <div>
                        <legend>Inversão de Algarismos</legend>
                        <label for="id_num1">Informe um número inteiro de 3 algarismos</label>
                        <input type="number" id="id_num1" name="num1">
                    </div>

                    <button type="submit">inverter</button>

                </form>
            </fieldset>

            <?php
            if (isset($_POST['num1'])) {
                $num1 = $_POST['num1'];

                $v1 = floor($num1 / 100);
                $v2 = floor(($num1 % 100) / 10);
                $v3 = floor(($num1 % 100) % 10);

                echo "$v3 $v2 $v1";
            }
            ?>
        </div>
    </body>
</html>
