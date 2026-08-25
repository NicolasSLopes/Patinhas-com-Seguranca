<?php 

    include "../infra/conexao.php";

    $nomeCliente = $_POST['nome_cliente'];

    $stmt = $conexao->prepare("INSERT INTO cliente (nome_cliente) VALUES (?)");

    $stmt->execute([$nomeCliente]);

?>