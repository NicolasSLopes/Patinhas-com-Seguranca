<?php 

    include "../infra/conexao.php";

    $nomeCliente = $_POST['nome_cliente'];
    $idCliente = $_POST['id_cliente'];

    $stmt = $conexao->prepare("UPDATE cliente SET nome_cliente = ? WHERE id_cliente = ?");

    $stmt->bind_param("si", $nomeCliente, $idCliente);
    
    $stmt->execute();

?>