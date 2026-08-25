<?php   
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "Patinhas-com-Seguranca";
    $porta = 3306;

    $conexao = nem mysqli($host, $user, $password, $database, $porta);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    $conexao->set_charset("utf8");