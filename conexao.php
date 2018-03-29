<?php

    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DB", "escola");
    define("PORT", "3306");
    
    function conexao(){
        $link = mysqli_connect(HOST, USER, PASS, DB, PORT);
        mysqli_set_charset($link, 'utf8');
        
        return $link;
    }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

