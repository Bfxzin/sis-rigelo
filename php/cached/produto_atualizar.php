<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/files/logo.png" type="image/x-icon"> <!-- fav ico -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../../style.css">
    <script src="../javascript/java.js"></script>
    <title>Painel de moderação</title>
</head>

<body>
    <div class="component-container">

        <?php // Verificando se o usuário está logado
        include_once "../session/sessao_verificar.php"; ?>

        <div id="menu_lateral_adm">
            <a href="../../pages/adm.php">Painel</a> <br>
            <a href="../../pages/adm.php#produtos">Produtos</a> <br>
            <a href="../../pages/adm.php#pedidos">Pedidos</a> <br>
            <a href="../../pages/adm.php#estoque">Estoque</a> <br><br>
            <a href="#">Deslogar</a>
        </div>
    </div>

    <div id="prancheta_produtos">

        <?php include_once "../session/conexao.php";

        $id_item = $_GET["id"];

        $query = "SELECT * FROM produto where id = $id_item";
        $result = mysqli_query($conexao, $query);

        if ($result->num_rows > 0) { // Itens salvos no banco de dados
            while ($dados = $result->fetch_assoc()) {

                $nome = $dados["nome"];
                $foto_produto = $dados["foto_item"];

                $preco = $dados["preco"];
                $descricao = $dados["descricao"];
                $quantidade = $dados["quantidade"];

                echo "
        <form class='form-reginho' action='../functions/item_atualizar.php' enctype='multipart/form-data' method='POST'>
            <fieldset>
                <legend>Editar produto</legend>
                
                <a class='icon_excluir icon_excluir_prancheta_editar_produto' href='../functions/item_excluir.php?id=$id_item'><i class='fa-solid fa-trash'></i></a>

                <input type='text' oninput='restrictInput(this, /[^A-Za-z]/g, 70);' required name='nome' placeholder='Nome do produto' value='$nome'>
                <input type='text' name='descricao' maxlength='400' required placeholder='Descrição' value='$descricao'>
                <input type='text' name='preco' oninput='restrictInput(this, /[^0-9]/g, 14);' required placeholder='Preço' value='$preco'>
                <input type='number' name='estoque' oninput='restrictInput(this, /[^0-9]/g, 14);' required placeholder='Quantidade em estoque' value='$quantidade'>
                <input id='input_id_item' type='number' name='id_item' oninput='restrictInput(this, /[^0-9]/g, 14);' required placeholder='Quantidade em estoque' value='$id_item'>

                <input type='file' name='img' accept='image/*' id='input_foto_produto'>

                <input type='submit' value='Atualizar produto'>
            </fieldset>
        </form>";
            }
        } ?>
    </div>
</body>

</html>