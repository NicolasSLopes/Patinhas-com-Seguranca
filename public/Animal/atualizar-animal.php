<?php 

    include "../../infra/conexao.php";

    $nomeAnimal = $_POST['nome_animal'];
    $idAnimal = $_POST['id_animal'];
    $racaAnimal = $_POST['raca_animal'];
    $idadeAnimal = $_POST['idade_animal'];

    $stmt = $conexao->prepare("UPDATE animal SET nome_animal = ?, raca_animal = ?, idade_animal = ? WHERE id_animal = ?");

    $stmt->bind_param("ssii", $nomeAnimal, $racaAnimal, $idadeAnimal, $idAnimal);

    $stmt->execute();

    header("Location: ../../index.php");
    exit;

?>