<div id="form-registro">
  <h2>Registro</h2>

  <div class="table-register">
    <form class="form-reginho" action="php/session/cadastrar_usuario.php" method="POST">
      <div class="nomeum">
        <label for="inputname" class="form-label">Primeiro nome</label>
        <input type="text" class="form-control" oninput="restrictInput(this, /[^A-Za-z]/g, 70);" id="inputname" name="nome" placeholder="João" required>
      </div>

      <div class="nomedois">
        <label for="sobrenome" class="form-label">Ultimo nome</label>
        <input type="text" class="form-control" oninput="restrictInput(this, /[^A-Za-z]/g, 120);" id="sobrenome" name="sobrenome" placeholder="Silva de Souza">
      </div>

      <div class="emailr">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" maxlength="200" id="email" name="email" placeholder="email@example.com">
      </div>

      <div class="senhac">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" maxlength="32" id="senha" name="senha">
      </div>

      <div class="senhac">
        <label for="senhaconfirm" class="form-label">Confirme sua senha</label>
        <input type="password" class="form-control" maxlength="32" id="senhaconfirm" name="senhaconfirm">
      </div>

      <div class="cpfcnpj">
        <label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
        <input type="number" class="form-control" oninput="restrictInput(this, /[^0-9]/g, 14);" id="cpfcnpj" name="cpfcnpj">
      </div>

      <div class="CEP">
        <label for="cep" class="form-label">CEP</label>
        <input type="number" class="form-control" oninput="restrictInput(this, /[^0-9]/g, 8);" id="cep" name="cep" placeholder="1807115">
      </div>

      <div class="numerocasa">
        <label for="numcasa" class="form-label">Número da residência</label>
        <input type="number" class="form-control" oninput="restrictInput(this, /[^0-9]/g, 6);" id="numcasa" name="numcasa" placeholder="973">
      </div>

      <div class="telefone">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" oninput="restrictInput(this, /[^0-9]/g, 9);" id="telefone" name="telefone" placeholder="15-981777432">
      </div>

      <button class="entrar" name="submit" id="submit" type="submit">Enviar</button>
    </form>
  </div>
</div>