<?php require_once "../session/conexao.php";

$nome = $_POST["nome"];
$foto_item = $_POST["foto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["estoque"];

$query = "INSERT INTO produto (nome, foto_item, preco, descricao, quantidade) 
    VALUES ('$nome', '$foto_item', '$preco', '$descricao', $quantidade)";

mysqli_query($conexao, $query);

header("Location: ../../pages/adm.php");
