<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/files/logo.png" type="image/x-icon"> <!-- fav ico -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="javascript/java.js"></script>
    <title>Painel de moderação</title>
</head>

<body>
    <div class="component-container">

        <?php // Verificando se o usuário está logado
        include_once "../php/session/sessao_verificar.php"; ?>

        <div id="menu_lateral_adm">
            <a href="#">Painel</a> <br>
            <a href="#">Produtos</a> <br>
            <a href="#">Pedidos</a> <br>
            <a href="#">Estoque</a> <br><br>
            <a href="#">Deslogar</a>
        </div>
    </div>

    <div id="prancheta_produtos">
        <button>Adicionar produto</button>

        <form class="form-reginho" action="../php/functions/item_registrar.php" method="POST">
            <div class="nome">
                <label for="inputname" class="form-label">Nome do item</label>
                <input type="text" class="form-control" oninput="restrictInput(this, /[^A-Za-z]/g, 70);" id="inputname" name="nome" placeholder="Gelo" required>
            </div>

            <div class="foto">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" id="foto" required>
            </div>

            <div class="preco">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="preco" name="preco" required>
            </div>

            <div class="descricao">
                <label for="descricao" class="form-label">Descrição do produto</label>
                <input type="text" class="form-control" maxlength="400" id="descricao" name="descricao">
            </div>

            <div class="estoque">
                <label for="estoque" class="form-label">Quantidade em estoque</label>
                <input type="number" class="form-control" oninput="restrictInput(this, /[^0-9]/g, 14);" id="estoque" name="estoque">
            </div>

            <button class="entrar" name="submit" id="submit" type="submit">Cadastrar!</button>
        </form>

        <div id="lista_produtos">

            <div class="products-container">
                <ul>
                    <?php include_once "../php/session/conexao.php";

                    // Verificando se não existe cadastro para o e-mail informado
                    $query = "SELECT * FROM produto";
                    $result = mysqli_query($conexao, $query);

                    if ($result->num_rows > 0) { // Itens salvos no banco de dados
                        while ($dados = $result->fetch_assoc()) {

                            $id_produto = $dados["id"];
                            $nome = $dados["nome"];
                            // $foto_produto = $dados["foto_item"];

                            $preco = $dados["preco"];
                            $descricao = $dados["descricao"];
                            $quantidade = $dados["quantidade"];

                            echo "<li class='product-card'>
                                    <div>
                                        <h3>$nome</h3>
                                        <p>$descricao</p>
                                    <span>$quantidade unidades restantes</span>
                                        <div>
                                            <span class='price'>R$ $preco</span>
                                            <input type='submit' value='Adicionar ao Carrinho'>
                                        </div>
                                    </div>
                                </li>";
                        }
                    } else
                        echo "Ainda não há produtos registrados!";
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>