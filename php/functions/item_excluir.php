<?php require_once "../session/conexao.php";

$id_produto = $_GET["id"];

$query = "DELETE FROM produto where id = $id_produto";
mysqli_query($conexao, $query);

header("Location: ../../pages/adm.php");
