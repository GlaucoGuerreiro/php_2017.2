<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Alunos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form action="cad_aluno.php" method="post">
                    <legend>Cadastro de Alunos</legend>
                        <fieldset>
                        <div>
                            <label for="id_nome">Nome:</label>
                            <input type="text" id="id_nome" name="nome">
                        </div>
                        <div>
                            <label for="id_matricula">Matricula:</label>
                            <input type="number" id="id_matricula" name="matricula">
                        </div>
                        <div>
                            <label for="id_telefone">Telefone:</label>
                            <input type="tel" id="id_telefone" name="telefone">
                        </div>
                    </fieldset>
                    <button type="submit">Submeter</button>          

                </form>
            </div>
        </div>
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
