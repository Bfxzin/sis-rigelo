<?php require_once "../session/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$texto = $_POST["texto"];

// Cadastrando a solicitação de contato
$query = "INSERT INTO contato (email, nome, telefone, texto) 
    VALUES ('$email', '$nome', '$telefone', '$texto')";

mysqli_query($conexao, $query);

header("Location: ../../index.php");
