<!-- mandando dados para o banco -->
<?php require_once "conexao.php";

$Nome = $_POST["nome"];
$Sobrenome = $_POST["sobrenome"];
$Email = $_POST["email"];
$Senha = $_POST["senha"];
$Cpfcnpj = $_POST["cpfcnpj"];
$Cep = $_POST["cep"];
$Numcasa = $_POST["numcasa"];
$Telefone = $_POST["telefone"];

$query = "INSERT INTO cadastro (nome, sobrenome, email, senha, cpfcnpj, cep, numcasa, telefone) 
    VALUES ('$Nome', '$Sobrenome', '$Email', '$Senha', '$cCpfcnpj', '$Cep', '$Numcasa', '$Telefone')";

$result = mysqli_query($conexao, $query);

if ($result) {
  echo "Inserção bem-sucedida!";
} else {
  echo "Erro na inserção: " . mysqli_error($conexao);
}

header("Location: ../../index.php");