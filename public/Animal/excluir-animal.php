<?php

include "../../infra/conexao.php";

$id = $_GET["id_animal"];

$sql = "DELETE FROM animal WHERE id_animal=?";

$stmt = $conexao->prepare($sql);

$stmt->bind_param("i", $id);

$stmt->execute();

header("Location: ../../index.php");
exit;
?>