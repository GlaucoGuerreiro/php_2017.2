<?php
    require_once 'crud.php';
    
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $telefone = $_POST['telefone'];
    
    /*echo    "nome: $nome <br>"
        ."matricula: $matricula <br>"
        ."telefone: $telefone <br>"
        
*/  
    
    if(isset($_POST['nome'])){
        if(gravar($nome, $matricula, $telefone)){
            echo('Dados gravados com sucesso');
        }else{
            echo('Falha ao gravar os dados');
        }
    }
        
    