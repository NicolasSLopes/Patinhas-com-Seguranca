<?php 

    include "../infra/conexao.php";

    $nomeCliente = $_POST['nome_cliente'];

    $stmt = $conexao->prepare("UPDATE cliente SET nome_cliente = ? WHERE id_cliente = ?");

    $stmt->execute([$nomeCliente, $_POST['id_cliente']]);

?>