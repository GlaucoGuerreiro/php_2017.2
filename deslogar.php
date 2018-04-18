<?php
    # destruir a sessão "logado"
    session_unset($_SESSION['logado']);
   
    # remove a atribuição da sessão "logado"
    unset($_SESSION['logado']);
    
    # destrói todas as sessões
    session_destroy();
    
    # redireciona para a página index
    header("Location: index.php");
    
    #finaliza o arquivo
    die();
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

