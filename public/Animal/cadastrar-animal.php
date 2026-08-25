<?php 

    include "../infra/conexao.php";

    $nomeAnimal = $_POST['nome_animal'];
    $idCliente = $_POST['id_cliente'];

    $stmt = $conexao->prepare("INSERT INTO  animal (nome_animal, id_cliente) VALUES (?, ?)");

    $stmt->execute([$nomeAnimal, $idCliente]);

?>