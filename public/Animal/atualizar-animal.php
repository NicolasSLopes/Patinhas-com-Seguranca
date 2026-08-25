<?php 

    include "../infra/conexao.php";

    $nomeAnimal = $_POST['nome_animal'];
    $idAnimal = $_POST['id_animal'];

    $stmt = $conexao->prepare("UPDATE animal SET nome_animal = ? WHERE id_animal = ?");

    $stmt->bind_param("si", $nomeAnimal, $idAnimal);

    $stmt->execute();

?>