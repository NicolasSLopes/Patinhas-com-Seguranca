<?php

include "../infra/conexao.php";

$id = $_GET["id_cliente"];

$sql = "DELETE FROM cliente WHERE id_cliente=?";

$stmt = $conexao->prepare($sql);

$stmt->execute([$id]);

header("Location: ../index.php");
?>