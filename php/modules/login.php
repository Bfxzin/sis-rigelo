<div id="box-login">
  <form action="php/session/usuario_login.php" method="POST">
    <h2>Login</h2>
    <div class="mb-3">
      <label for="inputEmail" id="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="inputPassword" id="password" class="form-label">Senha</label>
      <input type="password" class="form-control" id="inputPassword" name="senha">
    </div>

    <div class="button-container"> 
      <a href="#" onclick="exibe_guia('btn_trocar_senha')">Esqueci a senha</a>
      <button class="register" type="button">Cadastre-se</button>
    </div>
    <button class="entrar" type="submit">Entrar</button>
  </form>
</div>