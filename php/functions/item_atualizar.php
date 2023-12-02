<?php require_once "../session/conexao.php";

$nome = $_POST["nome"];
$id_produto = $_POST["id_item"];

$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["estoque"];

$arq_name = $_FILES["img"]["name"]; //O nome do ficheiro
$arq_size = $_FILES["img"]["size"]; //O tamanho do ficheiro
$arq_tmp = $_FILES["img"]["tmp_name"]; //O nome temporário do arquivo

$query = "UPDATE produto set nome = '$nome', preco = '$preco', descricao = '$descricao', quantidade = '$quantidade' where id = $id_produto";
mysqli_query($conexao, $query);

if (STRLEN($arq_name) > 0) {
    $query = "UPDATE produto set foto_item = '$arq_name' where id = $id_produto";
    mysqli_query($conexao, $query);

    // Criando uma cópia da imagem
    move_uploaded_file($arq_tmp, "../../static/files/produtos/" . $arq_name);
}

$result = mysqli_query($conexao, $query);

header("Location: ../../pages/adm.php");
