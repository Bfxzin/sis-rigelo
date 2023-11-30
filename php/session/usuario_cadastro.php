<!-- mandando dados para o banco -->
<?php require_once "conexao.php";
$email = $_POST["email"];
$senha = $_POST["senha"];

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpfcnpj = $_POST["cpfcnpj"];
$cep = $_POST["cep"];
$numcasa = $_POST["numcasa"];
$telefone = $_POST["telefone"];

// Verificando se não existe cadastro para o e-mail informado
$query = "SELECT * FROM cadastro WHERE email = '$email'";
$result = mysqli_query($conexao, $query);

if ($result->num_rows > 0) // E-mail cadastrado
    header("Location: ../../index.php");

// Cadastrando uma conta nova
$query = "INSERT INTO cadastro (nome, sobrenome, email, senha, cpfcnpj, cep, numcasa, telefone) 
    VALUES ('$nome', '$sobrenome', '$email', '$senha', '$cpfcnpj', '$cep', '$numcasa', '$telefone')";

mysqli_query($conexao, $query);

header("Location: ../../index.php");
