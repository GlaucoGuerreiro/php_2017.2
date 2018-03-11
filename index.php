<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
    <script type="text/javascript">
        function cadastrar(){
            location.href = "cadastro.html";
        }
        function editar(){
            location.href = "editar.html"
        }
    </script>
    <style type="text/css">
        #container{
            width: 80%;
            margin: 0 auto;
            border: solid 1px;
            height: 1000px;
        }
        .box{
            float: left;
            width: 30%;
            height: 300px;
            margin: 0 auto;
            border: solid 1px blue;
            margin: 50px 0 0 140px;
            border-radius: 25px;
            box-shadow: #0062cc 10px 10px 10px;
            padding-left:10px;
        }
    </style>

    <title>Senac Automotivo LTDA</title>
  </head>
  <body>
      <div id="container">
        <h1 align="center">Senac Automotivo LTDA</h1>
        <article class="box">
            <p>Aqui será acrescentado um texto futuramente</p>
            <center>
                <input type="button" value="Cadastrar" onclick="cadastrar();">
            </center>
        </article>
        <article class="box">
            <p>Aqui será acrescentado um texto futuramente</p>
            <center>
                <input type="button" value="Editar" onclick="editar();">
            </center>
        </article>
       
        
        
        </form>
        </div>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="recursos/js/bootstrap.min.js"></script>
      </div>
    
  </body>
</html>
