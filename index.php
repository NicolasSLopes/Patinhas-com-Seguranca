<?php

include "infra/conexao.php";

$clientes = mysqli_query($conexao, "SELECT id_cliente, nome_cliente, email_cliente, telefone_cliente FROM cliente ORDER BY nome_cliente");
$animais = mysqli_query($conexao, "SELECT animal.id_animal, animal.nome_animal, animal.raca_animal, animal.idade_animal, cliente.nome_cliente
    FROM animal
    LEFT JOIN cliente ON animal.id_cliente = cliente.id_cliente
    ORDER BY animal.nome_animal");  

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Patinhas Segurança</title>
</head>
<body>
    <h1>Patinhas Segurança</h1>

    <p>
        <a href="public/Cliente/cadastrar-cliente.php">Cadastrar cliente</a>
        <a href="public/Animal/cadastrar-animal.php">Cadastrar animal</a>
    </p>

    <h2>Clientes</h2>
    <?php if ($clientes && mysqli_num_rows($clientes) > 0) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php while ($cliente = mysqli_fetch_assoc($clientes)) { ?>
                <tr>
                    <td><?php echo $cliente['id_cliente']; ?></td>
                    <td><?php echo $cliente['nome_cliente']; ?></td>
                    <td><?php echo $cliente['email_cliente']; ?></td>
                    <td><?php echo $cliente['telefone_cliente']; ?></td>
                    <td>
                        <a href="public/Cliente/editar-cliente.php?id_cliente=<?php echo $cliente['id_cliente']; ?>">Editar</a>
                        <a href="public/Cliente/excluir-cliente.php?id_cliente=<?php echo $cliente['id_cliente']; ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>

    <h2>Animais</h2>
    <?php if ($animais && mysqli_num_rows($animais) > 0) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Raça</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
            <?php while ($animal = mysqli_fetch_assoc($animais)) { ?>
                <tr>
                    <td><?php echo $animal['id_animal']; ?></td>
                    <td><?php echo $animal['nome_animal']; ?></td>
                    <td><?php echo $animal['nome_cliente']; ?></td>
                    <td><?php echo $animal['raca_animal']; ?></td>
                    <td><?php echo $animal['idade_animal']; ?></td>
                    <td>
                        <a href="public/Animal/editar-animal.php?id_animal=<?php echo $animal['id_animal']; ?>">Editar</a>
                        <a href="public/Animal/excluir-animal.php?id_animal=<?php echo $animal['id_animal']; ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
</body>
</html>