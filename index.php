<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPfood</title>
</head>

<body>
    <h2>LPfood</h2>

    <button type="button" onclick="window.location.href='public/clientes/cadastrar_cliente.php'">Cadastrar Cliente</button>
    <button type="button" onclick="window.location.href='public/restaurantes/cadastrar_restaurante.php'">Cadastrar Restaurante</button>
    <button type="button" onclick="window.location.href='public/restaurantes/cadastrar_pedido.php'">Cadastrar Pedido</button>

    <br>
    <h2>Lista de Clientes</h2>

    <table>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
        <?php
        include 'infra/conexao.php';
        $sql = "SELECT * FROM clientes";
        $clientes = $conn->query($sql);
        while ($cliente = $clientes->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $cliente['id']; ?></td>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td><?php echo $cliente['telefone']; ?></td>
                <td>
                    <button type="button" onclick="window.location.href='public/clientes/edit_cliente.php?id=<?php echo $cliente['id']; ?>'">Editar</button>
                    <button type="button" onclick="if (confirm('Tem certeza que deseja excluir este cliente?')) { window.location.href='public/clientes/delete_cliente.php?id=<?php echo $cliente['id']; ?>'; }">Excluir</button>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>

    <h2>Lista de Restaurantes</h2>
    <table>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Ações</th>
        <?php
        $sql = "SELECT * FROM restaurantes";
        $restaurantes = $conn->query($sql);
        while ($restaurante = $restaurantes->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $restaurante['id_restaurante']; ?></td>
                <td><?php echo $restaurante['nome']; ?></td>
                <td><?php echo $restaurante['categoria']; ?></td>
                <td><?php echo $restaurante['endereco']; ?></td>
                <td><?php echo $restaurante['telefone']; ?></td>
                <td>
                    <button type="button" onclick="window.location.href='public/restaurantes/edit_restaurante.php?id=<?php echo $restaurante['id_restaurante']; ?>'">Editar</button>
                    <button type="button" onclick="if (confirm('Tem certeza que deseja excluir este restaurante?')) { window.location.href='public/restaurantes/delete_restaurante.php?id=<?php echo $restaurante['id_restaurante']; ?>'; }">Excluir</button>
                </td>
            </tr>

        <?php
        }
        ?>

</body>

</html>