<?php
    
    require_once 'crud_contato.php';
    
    #$nome = $_POST['name']; - método que estavamos utilizando até o momento
    
    session_start();
    # verifica se o parâmetro "excluir" contém na URL (contato.php?excluir)
    if(filter_input(INPUT_GET, 'excluir')){
        $id = filter_input(INPUT_GET, 'excluir', FILTER_SANITIZE_NUMBER_INT);
        if(excluiContato($id)){
            $_SESSION['msg_success'] = "Contato excluido com sucesso";
            header("Location: list_contato.php");
        }else{
            $_SESSION['msg_fail'] = "Erro ao excluir o contato";
            header("Location: list_contato.php");
    }
    die();
    # verifica se os campos name, email, message estão definidos
 }elseif(filter_input(INPUT_POST, 'name') &&
         filter_input(INPUT_POST, 'email') &&
         filter_input(INPUT_POST, 'message')){
     
     $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
     $mensagem = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
     
    if(setContato($nome, $email, $mensagem)){
        $_SESSION['msg_success'] = "Mensagem enviada com sucesso."; 
        header("Location: index.php#contact");
                
    }else{
        $_SESSION['msg_fail'] = "Falha ao enviar mensagem!";
        header("Location: index.php#contact");
       
    }
    # se chamar somente o arquivo contato.php é redirecionado para o index.php
 }else{
     header("Location: index.php");
 }
 die();

