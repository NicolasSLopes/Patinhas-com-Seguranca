<?php 

    include "../infra/conexao.php";

    $nomeAnimal = $_POST['nome_animal'];

    $stmt = $conexao->prepare("UPDATE animal SET nome_animal = ? WHERE id_animal = ?");

    $stmt->execute([$nomeAnimal, $_POST['id_animal']]);

?>