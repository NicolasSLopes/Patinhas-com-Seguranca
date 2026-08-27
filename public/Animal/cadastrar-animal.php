<?php 

    include "../../infra/conexao.php";

    $nomeAnimal = $_POST['nome_animal'];
    $idCliente = $_POST['id_cliente'];

    $stmt = $conexao->prepare("INSERT INTO  animal (nome_animal, id_cliente) VALUES (?, ?)");

    $stmt->bind_param("si", $nomeAnimal, $idCliente);

    $stmt->execute();

    header("Location: ../../index.php");
    exit;

?>