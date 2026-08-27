<?php 

    include "../../infra/conexao.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $nomeAnimal = $_POST['nome_animal'];
        $racaAnimal = $_POST['raca_animal'];
        $idadeAnimal = $_POST['idade_animal'];
        $idCliente = $_POST['id_cliente'];

        $stmt = $conexao->prepare("INSERT INTO animal (nome_animal, raca_animal, idade_animal, id_cliente) VALUES (?, ?, ?, ?)");

        $stmt->bind_param("ssii", $nomeAnimal, $racaAnimal, $idadeAnimal, $idCliente);

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
    <title>Cadastrar Animal</title>
</head>
<body class="pagina-cadastro">
    <h1>Cadastrar Animal</h1>
    <form class="formulario-cadastro" method="POST" action="cadastrar-animal.php">
        <label for="nome_animal">Nome do Animal:</label>
        <input type="text" id="nome_animal" name="nome_animal" required>

        <label for="raca_animal">Raça do Animal:</label>
        <input type="text" id="raca_animal" name="raca_animal" required>

        <label for="idade_animal">Idade do Animal:</label>
        <input type="number" id="idade_animal" name="idade_animal" required>

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

        <div class="acoes-formulario">
            <button type="submit">Cadastrar</button>
            <button type="button" onclick="window.location.href='../../index.php'">Cancelar</button>
        </div>
    </form>
</body>
</html>