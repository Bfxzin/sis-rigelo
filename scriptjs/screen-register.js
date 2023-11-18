const loginContainer = `
<div class="box-login">
<form action="login-register.php" method="POST">
  <h2>Login</h2>
  <div class="mb-3">
    <label for="inputEmail" id="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="email@example.com">
  </div>
  <div class="mb-3">
    <label for="inputPassword" id="password" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword">
  </div>

  <div class="button-container"> 
    <a href="">Esquecei a senha</a><br><br>
    <button class="registro" type="button">Cadastre-se</button>
  </div>
  <button class="entrar" type="submit">Entrar</button>
</form>
</div>
`

const registerContainer = `
<div class="form-registro">

  <h2>Registro</h2>

  <div class="table-register">

    <form class="form-reginho" action="login-register.php" method="POST">
      <div class="nomeum">
        <label for="inputname" class="form-label">Primeiro nome</label>
        <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');" maxlength="70" id="inputname" name="nome" placeholder="João" required>
      </div>


      <div class="nomedois">
        <label for="inputEmail" name="sobrenome" id="sobrenome" class="form-label">Ultimo nome</label>
        <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');" maxlength="120"  id="inputEmail" placeholder="silva de souza">
      </div>

      <div class="emailr">
        <label for="inputEmail" name="email" id="email" class="form-label">Email</label>
        <input type="email" class="form-control" maxlength="200"  id="inputEmail" placeholder="email@example.com">
      </div>

      <div class="senhac">
        <label for="inputPassword" name="senha" id="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" maxlength="32"  id="inputPassword">
      </div>

      <div class="senhac">
        <label for="inputPasswordc" name="senhaconfirm" id="senhaconfirm" class="form-label">confirme sua enha</label>
        <input type="password" class="form-control" maxlength="32" id="inputPassword">
      </div>

      <div class="cpfcnpj">
        <label for="inputcpfcnpj" name="cpfcnpj" id="cpfcnpj" class="form-label">CPF/CNPJ</label>
        <input type="number" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="14" id="inputPassword">
      </div>

      <div class="CEP">
        <label for="inputcep" name="cep" id="cep" class="form-label">CEP</label>
        <input type="number" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="8" id="inputPassword" placeholder="180-7115">
      </div>

      <div class="numerocasa">
        <label for="inputnumcasa" name="numcasa" id="numcasa" class="form-label">Numero da residencia</label>
        <input type="number" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="6" id="inputPassword" placeholder="973">
      </div>

      <div class="telefone">
        <label for="inputtelefone" name="telefone" id="telefone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="9" id="inputPassword" placeholder="15-981777432">
      </div>

      <button class="entrar" name="submit" id="submit" type="submit">Pronto</button>

    </form>

  </div>

</div>
`
const component = document.querySelector('#login-register-component')


component.innerHTML = loginContainer
const button = document.querySelector('.registro')
console.log(button)


button.onclick = () => {
    component.innerHTML = registerContainer
}





/* document.addEventListener('DOMContentLoaded', function() {
    const cadastreSeButton = document.querySelector('.registro');
    const entrarButton = document.querySelector('.entrar');
    const formLogin = document.querySelector('.box-login');
    const formRegistro = document.querySelector('.form-registro');

    cadastreSeButton.addEventListener('click', function() {
        formLogin.style.display = 'none';
        formRegistro.style.display = 'block';
    });

    entrarButton.addEventListener('click', function() {
        formLogin.style.display = 'block';
        formRegistro.style.display = 'none';
    });
});
 */

