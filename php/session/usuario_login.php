<?php require_once "conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

$query = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);

if ($result->num_rows > 0) {
    while ($linha = $result->fetch_assoc()) {

        session_start();
        $_SESSION["logado"] = 1;
        $_SESSION["id_user"] = $linha["idc"];
        $_SESSION["nome_user"] = $linha["nome"];

        //  $_SESSION["hierarquia"] = $linha["hierarquia"];
        header("Location: ../../index.php");
    }
} else
    header("Location: ../../index.php");