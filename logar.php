<?php

require_once './crud_login.php';
session_start();

$login = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

if (efetuarLogin($login, $senha) != null) {
    $_SESSION['logado'] = efetuarLogin($login, $senha);
    # header é utilizado para redirecionar páginas
    header("Location: gerenciar.php");
} else {
    $_SESSION['msg'] = "Falha ao efetuar login. Verifique seu login e senha";
    header("Location: login.php");
}
# die(), serve para encerrar a leitura do arquivo naquele ponto
die();


