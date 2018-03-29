<?php
    require_once './conexao.php';
    
    function gravar($nome, $matricula, $telefone){
        $link = conexao();
        
        $query = "insert into alunos values (null, '{$nome}','{$matricula}','{$telefone}')";
        
        if(mysqli_query($link, $query)){
            return true;
        }
            return false;
        }
    

