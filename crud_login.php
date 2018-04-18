<?php
    require_once './conexao.php';
    
    function efetuarLogin($login, $senha){
        $link = getConnection();
        
        $query = "select * from login where login = '{$login}' and senha = md5('{$senha}')";
        
        $result = mysqli_query($link, $query);
        
        $usuario = mysqli_fetch_assoc($result);
        
        return $usuario;
    }

