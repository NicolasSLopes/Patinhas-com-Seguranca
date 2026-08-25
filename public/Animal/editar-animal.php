<?php

include "../infra/conexao.php";

$id = $_GET["id_animal"];

$stmt = $conexao->prepare("SELECT * FROM animal WHERE id_animal = ?");

$stmt->execute([$id]);

$animal = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patinhas Segurança</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>Patinhas Segurança</h1>
    </header>
    <main>
        <h2>Editando o animal <?php echo $animal["nome_animal"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $animal["id_animal"]?>">

            <label for="titulo">Nome:</label>
            <input type="name" name="nome" value="<?php echo $animal["nome_animal"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
   
</body>

</html>