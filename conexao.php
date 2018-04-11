<?php
    
    # constante para caminho do servidor
    define("HOST" ,"localhost");
    # constante para login de usuário
    define("USER", "root");
    # constante para definir a senha de usuário
    define("PASSWORD", "");
    # constante para o banco de dados
    define("DATABASE", "cms_php");
    # constante para a porta de comunicação
    define("PORT", "3306");
    
    function getConnection(){
        $link = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT);
        mysqli_set_charset($link, "utf8");
        return $link;
    }


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

