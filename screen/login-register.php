<?php
if (isset($_POST["submit"])) {
    include_once('../EndPoint/conexao.php');

    $Nome = $_POST["nome"];
    $Sobrenome = $_POST["sobrenome"];
    $Email = $_POST["email"];
    $Senha = $_POST["senha"];
    $Cpfcnpj = $_POST["cpfcnpj"];
    $Cep = $_POST["cep"];
    $Numcasa = $_POST["numcasa"];
    $Telefone = $_POST["telefone"];

    $query = "INSERT INTO cadastro (nome, sobrenome, email, senha, cpfcnpj, cep, numcasa, telefone) 
    VALUES ('$Nome', '$Sobrenome', '$Email', '$Senha', '$Cpfcnpj', '$Cep', '$Numcasa', '$Telefone')";

    $result = mysqli_query($conexao, $query);

    if ($result) {
        echo "Inserção bem-sucedida!";
    } else {
        echo "Erro na inserção: " . mysqli_error($conexao);
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../files/logo.png" type="image/x-icon"><!-- fav ico -->
  
  <!-- link de css das telas -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- conexão com bootstrap css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- conexáo css bootstrap -->
  <link rel="stylesheet" href="../style/login-register.css">   <!-- conexão com css tela login e registro -->
  
  
  
  <title>Rigelo</title>
</head>

<body>
  <div id="navbar-component"></div>
  
  <div id="login-register-component"></div>
  
  
  
  
  <script src="../scriptjs/navbar.js"></script>
  <script src="../scriptjs/screen-register.js"></script> <!-- conexão java script tela login-registro -->
  <link rel="stylesheet" href="../style/style.css"> <!-- conexão com css estilo clone (nav bar, background.etc) -->
  
</body>

</html>