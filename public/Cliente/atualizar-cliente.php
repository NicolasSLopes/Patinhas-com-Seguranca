<?php 

    include "../../infra/conexao.php";

    $nomeCliente = $_POST['nome_cliente'];
    $idCliente = $_POST['id_cliente'];
    $emailCliente = $_POST['email_cliente'];
    $telefoneCliente = $_POST['telefone_cliente'];

    $stmt = $conexao->prepare("UPDATE cliente SET nome_cliente = ?, email_cliente = ?, telefone_cliente = ? WHERE id_cliente = ?");

    $stmt->bind_param("sssi", $nomeCliente, $emailCliente, $telefoneCliente, $idCliente);

    $stmt->execute();

    header("Location: ../../index.php");
    exit;

?>