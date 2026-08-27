<?php

include "../../infra/conexao.php";

$id = $_GET["id_animal"];

$stmt = $conexao->prepare("SELECT * FROM animal WHERE id_animal = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$animal = $stmt->get_result()->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patinhas Segurança</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <header>
        <h1>Patinhas Segurança</h1>
    </header>
    <main>
        <h2>Editando o animal <?php echo $animal["nome_animal"]?>!</h2>
        <form action="atualizar-animal.php" method="POST">
            <input type="hidden" name="id_animal" value="<?php echo $animal["id_animal"]?>">

            <label for="titulo">Nome:</label>
            <input type="text" name="nome_animal" value="<?php echo $animal["nome_animal"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
   
</body>

</html>