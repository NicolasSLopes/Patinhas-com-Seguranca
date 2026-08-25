<?php

include "infra/conexao.php";

$clientes = mysqli_query($conexao, "SELECT id_cliente, nome_cliente FROM cliente ORDER BY nome_cliente");
$animais = mysqli_query($conexao, "SELECT animal.id_animal, animal.nome_animal, cliente.nome_cliente
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
    <header>
        <h1>Patinhas Segurança</h1>
    </header>

    <main>
        <section>
            <h2>Cadastro de Clientes</h2>
            <form action="public/Cliente/cadastrar-cliente.php" method="POST">
                <label for="nome_cliente">Nome:</label>
                <input type="text" id="nome_cliente" name="nome_cliente" required>

                <button type="submit">Cadastrar Cliente</button>
            </form>
        </section>

        <section>
            <h2>Cadastro de Animais</h2>
            <form action="public/Animal/cadastrar-animal.php" method="POST">
            <label for="nome_animal">Nome do Animal:</label>
            <input type="text" id="nome_animal" name="nome_animal" required>

                <label for="id_cliente">Cliente:</label>
                <select id="id_cliente" name="id_cliente" required>
                    <option value="">Selecione um cliente</option>
                    <?php
                        $clientesParaSelecao = mysqli_query($conexao, "SELECT id_cliente, nome_cliente FROM cliente ORDER BY nome_cliente");
                        while ($cliente = mysqli_fetch_assoc($clientesParaSelecao)) {
                            echo '<option value="' . $cliente['id_cliente'] . '">' . $cliente['nome_cliente'] . '</option>';
                        }
                    ?>
                </select>

                <button type="submit">Cadastrar Animal</button>

            </form>
        </section>

        <section class="listas">
            <div>
                <h2>Clientes</h2>
                <?php if ($clientes && mysqli_num_rows($clientes) > 0): ?>
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                        <?php while ($cliente = mysqli_fetch_assoc($clientes)): ?>
                            <tr>
                                <td><?php echo $cliente['id_cliente']; ?></td>
                                <td><?php echo $cliente['nome_cliente']; ?></td>
                                <td>
                                    <a href="public/Cliente/editar-cliente.php?id_cliente=<?php echo $cliente['id_cliente']; ?>">Editar</a>
                                    <a href="public/Cliente/excluir-cliente.php?id_cliente=<?php echo $cliente['id_cliente']; ?>" onclick="return confirm('Deseja excluir este cliente?');">Excluir</a>
                                </td>
                            </tr>
                    </table>
            </div>

            <div>
                <h2>Animais</h2>
                <?php if ($animais && mysqli_num_rows($animais) > 0): ?>
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cliente</th>
                            <th>Ações</th>
                        </tr>
                        <?php while ($animal = mysqli_fetch_assoc($animais)): ?>
                            <tr>
                                <td><?php echo $animal['id_animal']; ?></td>
                                <td><?php echo $animal['nome_animal']; ?></td>
                                <td><?php echo $animal['nome_cliente']; ?></td>
                                <td>
                                    <a href="public/Animal/editar-animal.php?id_animal=<?php echo $animal['id_animal']; ?>">Editar</a>
                                    <a href="public/Animal/excluir-animal.php?id_animal=<?php echo $animal['id_animal']; ?>" onclick="return confirm('Deseja excluir este animal?');">Excluir</a>
                                </td>
                            </tr>
                    </table>
            </div>
        </section>
    </main>
</body>
</html>