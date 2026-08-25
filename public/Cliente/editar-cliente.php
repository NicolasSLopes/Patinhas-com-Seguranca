<?php

include "../infra/conexao.php";

$id = $_GET["id_cliente"];

$stmt = $conexao->prepare("SELECT * FROM cliente WHERE id_cliente = ?");

$stmt->execute([$id]);

$cliente = $stmt->fetch(PDO::FETCH_ASSOC);

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
        <h2>Editando o cliente <?php echo $cliente["nome_cliente"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $cliente["id_cliente"]?>">

            <label for="titulo">Nome:</label>
            <input type="name" name="nome" value="<?php echo $cliente["nome_cliente"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
   
</body>

</html>