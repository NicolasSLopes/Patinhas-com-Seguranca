<?php

include "../../infra/conexao.php";

$id = $_GET["id_cliente"];

$stmt = $conexao->prepare("SELECT * FROM cliente WHERE id_cliente = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$resultado = $stmt->get_result();

$cliente = $resultado->fetch_assoc();
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
        <h2>Editando o cliente <?php echo $cliente["nome_cliente"]?>!</h2>
        <form action="atualizar-cliente.php" method="POST">
            <input type="hidden" name="id_cliente" value="<?php echo $cliente["id_cliente"]?>">

            <label for="titulo">Nome:</label>
            <input type="text" name="nome_cliente" value="<?php echo $cliente["nome_cliente"]?>">

            <label for="titulo">Email:</label>
            <input type="email" name="email_cliente" value="<?php echo $cliente["email_cliente"]?>">

            <label for="titulo">Telefone:</label>
            <input type="text" name="telefone_cliente" value="<?php echo $cliente["telefone_cliente"]?>">
            
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
   
</body>

</html>