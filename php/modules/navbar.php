<?php

echo '<div class="box-image">';
echo '<nav class="navb">';
echo '<div>';
echo '<a class="navbar-brand" href="#" onclick="exibe_guia(\'btn_home_page\')"><i class="fas fa-home"></i>Início</a>';
echo '<a class="navbar-brand" href="#" onclick="exibe_guia(\'btn_products\')"><i class="fas fa-shopping-cart"></i>Produtos</a>';
echo '<a class="navbar-brand" href="#" onclick="exibe_guia(\'btn_comodato\')"><i class="fas fa-location-arrow"></i>Comodato</a>';
echo '<a class="navbar-brand" href="#" onclick="exibe_guia(\'btn_contact\')"><i class="fas fa-headphones"></i>Contato</a>';

// Verificando se o usuário está logado
if (isset($_SESSION["logado"]))
    echo '<a class="navbar-brand" href="php/session/usuario_deslogar.php"><i class="fas fa-user"></i>Deslogar</a>';
else
    echo '<a class="navbar-brand" href="#" onclick="exibe_guia(\'btn_login_registro\')"><i class="fas fa-user"></i>Entrar / Cadastre-se</a>';

echo '</div>';

echo '<a href="#" onclick="exibe_guia(\'btn_home_page\')"><img src="files/logo.png" alt="Logo"></a>';
echo '</nav>';
echo '</div>';