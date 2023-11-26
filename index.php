<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="files/logo.png" type="image/x-icon"> <!-- fav ico -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style/globals.css">
    <link rel="stylesheet" href="style/login-register.css">
    <link rel="stylesheet" href="style/home.css">

    <script src="scriptjs/java.js"></script>
    <title>Rigelo</title>
</head>

<body id="home">

    <?php // Verificando se o usuário está logado
    include_once "php/session/sessao_verificar.php"; ?>

    <div id="navbar-component">
        <?php include_once "php/modules/navbar.php"; ?>
    </div>

    <div id="login-register-component"></div>

    <div id="services-component">
        <?php include_once "php/modules/services.php" ?>
    </div>

    <div id="contact-component">
        <?php include_once "php/modules/contact-us.php" ?>
    </div>

    <div id="change-password-component">
        <?php include_once "php/modules/change-password.php" ?>
    </div>

    <div class="text-thub" id="slogan">
        <h1>Rigelo</h1>
        <!-- <p>A sua distribuidora de gelo. Gelo de alta qualidade, de nosso freezer para o seu.</p> -->
        <h2>A sua distribuidora de Gelo.</h2>
        <p>Gelo de alta qualidade, de nosso freezer para o seu.</p>
    </div>
</body>

<script src="scriptjs/screen-register.js"></script> <!-- conexão javascript tela login-registro -->

</html>