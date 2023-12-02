<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/files/logo.png" type="image/x-icon"> <!-- fav ico -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="../javascript/java.js"></script>

    <title>Painel de moderação</title>
</head>

<body>
    <div class="component-container">

        <?php // Verificando se o usuário está logado
        include_once "../php/session/sessao_verificar_interno.php";
        include_once "../php/session/conexao.php"; ?>

        <div id="menu_lateral_adm">

            <img src="../static/files/logo.png" style="width: 80%">

            <br><br><br><br>

            <a href="#" onclick="exibe_guia('btn_cadastra_produto')">Produtos</a> <br>
            <a href="#" onclick="exibe_guia('btn_exibe_estoque')">Estoque</a> <br>
            <a href="#" onclick="exibe_guia('btn_exibe_pedidos')">Pedidos</a> <br><br>
            <a href="../php/session/usuario_deslogar.php">Deslogar</a>
        </div>
    </div>

    <div id="prancheta_produtos">
        <h1>Cadastro de produtos</h1>
        <form action="../php/functions/item_registrar.php" enctype="multipart/form-data" method="POST">
            <fieldset>
                <legend>Cadastrar produto</legend>
                <input type="text" oninput="restrictInput(this, /[^A-Za-z]/g, 70);" required name="nome" placeholder="Nome do produto">
                <input type="text" name="descricao" maxlength="400" required placeholder="Descrição">
                <input type="text" name="preco" oninput="restrictInput(this, /[^0-9]/g, 14);" required placeholder="Preço">
                <input type="number" name="estoque" oninput="restrictInput(this, /[^0-9]/g, 14);" required placeholder="Quantidade em estoque">

                <input type="file" name="img" accept="image/*" id="input_foto_produto" required>

                <input type="submit" value="Cadastrar produto">
            </fieldset>
        </form>
    </div>

    <div id="lista_pedidos">

        <?php
        $query = "SELECT * FROM pedido order by id desc";
        $result = mysqli_query($conexao, $query);

        if ($result->num_rows > 1) // Itens salvos no banco de dados
            echo "Ainda não há produtos registrados!"; ?>
    </div>


    <div id="lista_produtos">
        <h1>Produtos do estoque</h1>

        <div class="products-container">
            <ul>
                <?php
                $query = "SELECT * FROM produto order by id desc";
                $result = mysqli_query($conexao, $query);

                if ($result->num_rows > 0) { // Itens salvos no banco de dados
                    while ($dados = $result->fetch_assoc()) {

                        $id_produto = $dados["id"];
                        $nome = $dados["nome"];
                        $foto_produto = $dados["foto_item"];

                        $preco = $dados["preco"];
                        $descricao = $dados["descricao"];
                        $quantidade = $dados["quantidade"];

                        echo "<li class='product-card'>
                                    <img src='../static/files/produtos/$foto_produto' alt='$nome'>
                                    <div>
                                        <h3>$nome</h3>
                                        <p>$descricao</p>
                                        <span>$quantidade unidades restantes</span>
                                        <div>
                                            <span class='price'>R$ $preco</span>
                                            <a type='button' href='../php/cached/produto_atualizar.php?id=$id_produto'><input type='submit' value='Editar produto'></a>
                                        </div>
                                    </div>

                                    <a class='icon_excluir' href='../php/functions/item_excluir.php?id=$id_produto'><i class='fa-solid fa-trash'></i></a>
                                </li>";
                    }
                } else
                    echo "Ainda não há produtos registrados!";
                ?>
            </ul>
        </div>
    </div>
</body>

</html>