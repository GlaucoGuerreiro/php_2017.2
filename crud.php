<?php
# inclusão do arquivo que abre a conexão com o banco de dados
require_once './conexao.php';

// Arquivo responsável pr fazer as transações com o banco de dados

# Função responsável por gravar os dados no banco
function gravar($codigo, $nome, $modelo, $ano, $fabricante, $preco, $quantidade){
    # recebe a conexão aberta
    $link = conexao();
    
    # Query SQL para inserção dos dados
    $query = "insert into produto values (null, '{$codigo}','{$nome}','{$modelo}','{$ano}','{$fabricante}','{$preco}','{$quantidade}')";
    
    if(mysqli_query($link, $query)){
        return true;
    }
    return false;
    
}


