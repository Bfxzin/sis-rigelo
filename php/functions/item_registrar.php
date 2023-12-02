<?php require_once "../session/conexao.php";

$nome = $_POST["nome"];

$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["estoque"];

$arq_name = $_FILES["img"]["name"]; //O nome do ficheiro
$arq_size = $_FILES["img"]["size"]; //O tamanho do ficheiro
$arq_tmp = $_FILES["img"]["tmp_name"]; //O nome temporário do arquivo

$query = "INSERT INTO produto (nome, foto_item, preco, descricao, quantidade) VALUES ('$nome', '$arq_name', '$preco', '$descricao', $quantidade)";

// Criando uma cópia da imagem
move_uploaded_file($arq_tmp, "../../static/files/produtos/" . $arq_name);

$result = mysqli_query($conexao, $query);

header("Location: ../../pages/adm.php");
