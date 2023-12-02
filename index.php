<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="static/files/logo.png" type="image/x-icon"> <!-- fav ico -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="javascript/java.js"></script>
    <title>Rigelo</title>
</head>

<body>
    
    <div class="component-container">

        <?php // Verificando se o usuário está logado
        include_once "php/session/sessao_verificar.php"; ?>

        <div id="navbar-component">
            <?php include_once "php/modules/navbar.php"; ?>
        </div>

        <div id="login-register-component">
            <?php include_once "php/modules/login.php" ?>
            <?php include_once "php/modules/register.php" ?>
        </div>

        <div id="products-component">
            <?php include_once "php/modules/products.php" ?>
        </div>

        <div id="comodato-component">
            <?php include_once "php/modules/comodato.php" ?>
        </div>

        <div id="contact-component">
            <?php include_once "php/modules/contact-us.php" ?>
        </div>

        <div id="change-password-component">
            <?php include_once "php/modules/change-password.php" ?>
        </div>

        <div class="text-thub" id="home-page-component">
            <?php include_once "php/modules/slogan.php" ?>
            <?php include_once "php/modules/about.php" ?>
        </div>

    </div>

</body>

<script src="javascript/screen-register.js"></script> <!-- conexão javascript tela login-registro -->

</html>