<?php
    require_once './conexao.php';
    # Get e Set - buscar e atribuir
        
    # função para listar todos os contatos
    function getContatos(){
        # definir a variável de conexão
        $link = getConnection();
        # query de consulta(lista) para a tabela
        $query = "select * from contact";
        # envio da query e recebimento do resultado
        $result = mysqli_query($link, $query);
        # definir lista(array) de contatos
        $contactList = array();
        # carregar o array com os dados do banco
        while($contact = mysqli_fetch_assoc($result)){
            # insere o resultado no array
            array_push($contactList, $contact);
        }
        return $contactList;
    }
    
    # função para criar um contato específico
    function getContato($id){
        # definir a variável de conexão
        $link = getConnection();
        # query de consulta(lista) para a tabela
        $query = "select * from contact where id = $id";
        # envio da query e recebimento do resultado
        $result = mysqli_query($link, $query);
        # carregar a variável com os dados do banco
        $contact = mysqli_fetch_assoc($result);
            # retorna o contato carregado com os dados
            return $contact;
        }
     
    # função para gravar os dados   
    function setContato($name, $email, $message){
        $link = getConnection();
        
        $query = "insert into contact values (null, '{$name}', '{$email}', '{$message}')";
    
    if(mysqli_query($link, $query)){
        return true;
    }
        return false;
    }
    
    # função para atualizar contato
    function atualizaContato($name, $email, $message){
        $link = getConnection();
        
        $query = "update contact set contact_name = '{$name}', contact_email = '{$email}', contact_message = '{$message}' where id = $id";
        
        if(mysqli_query($link, $query)){
            return true;
        }
        return false;
    }
    
    # função para excluir contato
    function excluiContato($id){
        $link = getConnection();
        
        $query = "delete from contact where id = $id";
        
        if(mysqli_query($link, $query)){
            return true;
        }
        return false;
    }


