<?php 

    include "../../infra/conexao.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $nomeCliente = $_POST['nome_cliente'];
        $emailCliente = $_POST['email_cliente'];
        $telefoneCliente = $_POST['telefone_cliente'];

        $stmt = $conexao->prepare("INSERT INTO cliente (nome_cliente, email_cliente, telefone_cliente) VALUES (?, ?, ?)");

        $stmt->bind_param("sss", $nomeCliente, $emailCliente, $telefoneCliente);

        $stmt->execute();

        header("Location: ../../index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Cadastrar Cliente</title>
</head>
<body class="pagina-cadastro">
    <h1>Cadastrar Cliente</h1>
    <form class="formulario-cadastro" method="POST" action="cadastrar-cliente.php">

        <label for="nome_cliente">Nome do Cliente:</label>
        <input type="text" id="nome_cliente" name="nome_cliente" required>

        <label for="email_cliente">Email do Cliente:</label>
        <input type="email" id="email_cliente" name="email_cliente" required>

        <label for="telefone_cliente">Telefone do Cliente:</label>
        <input type="text" id="telefone_cliente" name="telefone_cliente" required>
        
        <div class="acoes-formulario">
            <button type="submit">Cadastrar</button>
            <button type="button" onclick="window.location.href='../../index.php'">Cancelar</button>
        </div>
    </form>
</body>
</html>