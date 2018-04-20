<?php
include_once 'crud_contato.php';
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    die();
} 
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <title>Área Restrita!</title>
        <style>
            .container {

                padding: 0;
                margin: 0;
                widht: 100%;
                height: 100%;
                min-height: 800px;
                background-color: #fff;

            }

            #layout { 

                width: 100%;
                height: 100%;
                min-height: 800px;

            }

            #layout td {

                vertical-align: top;
                border: 1px solid #e7e7e7;

            }

            #layout tr:nth-child(1) td:nth-child(1) {

                padding: 20px;
                width: 250px;
                height: 100%;
                background-color: #f0f0f0;
                border-right: 1px solid #e7e7e7;

            }

            #layout tr:nth-child(1) td:nth-child(2) {

                background-color: #fff;
                height: 100%;

            }

            .typeContainer {

                padding: 20px;
                min-height: 100px;
                width: 100%;
                background-color: #fff;
                border-bottom: 1px solid #e7e7e7;

            }

            .typeHeader {

                color: #7f7f7f;
                text-transform: uppercase;
                font-size: 10pt;

            }

            .itemContainer {

                width: 220px;
                padding: 10px;
                height: 80px;
                display: inline-block;
                background-color: #fff;
                margin-top: 10px;
                margin-bottom: 10px;

            }

            .itemConnected {

                color: #3c763d;
                background-color: #dff0d8;
                border: 1px solid #d6e9c6;
                border-radius: 6px;

            }

            .itemAttempting {

                color: #b8823b;
                background-color: #fcf8e3;
                border: 1px solid #faebcc;
                border-radius: 6px;

            }

            .itemNotConnected {

                color: #b84442;
                background-color: #f2dede;
                border: 1px solid #ebccd1;
                border-radius: 6px;

            }

            .itemLinks {

                color: #425bb8;
                background-color: #ddeaef;
                border: 1px solid #ebccd1;
                border-radius: 6px;

            }

            .itemHostname {

                text-align: center;
                font-weight: bold;
                font-size: 10pt;

            }

            .itemSummary {

                text-align: center;
                font-size: 8pt;

            }

            .itemStatus {

                background-color: #fff;
                text-align: center;
                font-size: 8pt;
                border-radius: 3px;
                border: 1px solid #e7e7e7;
                border-bottom: 1px solid #d3d3d3;
                border-top: 1px solid #fff;

            }

            .fa-check {

                color: #3c763d;

            }

            .fa-remove {

                color: #af4442;  

            }

            .panel-heading {

                padding: 8px!important;

            }

            .panel-body {

                padding: 8px!important;

            }


        </style>
    </head>
    <body>
        <div class="container-fluid" style="margin-top: 2%">
            <td>
                <h1 align="center">Bem Vindo <?= $_SESSION['logado']['nome'] ?></h1>
                <p align="center"><a href="deslogar.php">Deslogar</a>
            </td>
            <div class="row">
                <div class="typeContainer">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Mensagem</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach(getContatos() as $contato) :
                            ?>
                            
                            <tr>
                                <td><?= $contato['id'] ?></td>
                                <td><?= $contato['contact_name'] ?></td>
                                <td><?= $contato['contact_email'] ?></td>
                                <td><?= $contato['contact_message'] ?></td>
                                <td><a href="contato.php?excluir=<?= $contato['id'] ?>"<span class="fa fa-trash-o"></span></a></td>
                            </tr>
                            <?php
                                endforeach;
                            ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>     
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>