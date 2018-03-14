<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <title>Aula 03</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            .container {
                display: flex;
                justify-content: space-between;
            }

            .container::before, .container::after {
                width: 30px;
                height: 30px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="jumbotron text-center">
            <h1>Gerenciamento de Peças</h1>
            <p>Automotivo Ltda</p> 
        </div>

        <div class="container">
            <?php 
                // Criação de Template - 13/03/2018
                # $_GET método responsável por resgatar as requisições via GET
                $pagina = $_GET['pagina'];# o parâmetro pode ser diferente; ao invés de pagina, poderia ser qualquer outro
                # método responsável por incluir arquivos na página
                include $pagina . '.php';
                
            ?>
            
        </div>
            
    </body>
</html>
