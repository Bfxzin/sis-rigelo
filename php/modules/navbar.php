<?php

echo '<div class="box-image">';
echo '<nav class="navb">';
echo '<div>';
echo '<a class="navbar-brand" href="#" onclick="exibe_guia(\'slogan\')"><i class="fas fa-home"></i>Início</a>';
echo '<a class="navbar-brand" href="#" id="btn_services" onclick="exibe_guia(\'btn_services\')"><i class="fas fa-shopping-cart"></i>Produtos/aluguel</a>';
echo '<a class="navbar-brand" href="#"><i class="fas fa-location-arrow"></i>Rastreio</a>';

// Verificando se o usuário está logado
if (isset($_SESSION["logado"]))
    echo '<a class="navbar-brand" href="php/session/usuario_deslogar.php"><i class="fas fa-user"></i>Deslogar</a>';
else
    echo '<a class="navbar-brand" href="#" id="btn_login_registro" onclick="exibe_guia(\'btn_login_registro\')"><i class="fas fa-user"></i>Login/registro</a>';

echo '<a class="navbar-brand" href="#" onclick="exibe_guia(\'btn_contact\')"><i class="fas fa-headphones"></i>Fale conosco</a>';
echo '</div>';

echo '<a href="#" onclick="exibe_guia(\'slogan\')"><img src="files/logo.png" alt="Logo"></a>';
echo '</nav>';
echo '</div>';