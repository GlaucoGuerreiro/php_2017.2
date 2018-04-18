<?php
    
    require_once 'crud_contato.php';
    
    #$nome = $_POST['name']; - método que estavamos utilizando até o momento
    
    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); /* este é o método mais adequado e correto */
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    session_start();
    
    if(setContato($nome, $email, $mensagem)){
        $_SESSION['msg_success'] = "Mensagem enviada com sucesso."; 
        header("Location: index.php#contact");
        die();
        
    }else{
        $_SESSION['msg_fail'] = "Falha ao enviar mensagem!";
        header("Location: index.php#contact");
        die();
    }


