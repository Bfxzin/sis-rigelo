<h3>Entre em contato</h3>
<p>Ficou com alguma dúvida? Quer solicitar um orçamento? Entre em contato conosco através dos canais abaixo.
  Oferecemos atendimento personalizado para proporcionar uma experiência única a nossos clientes!</p>
<h3>Pedidos somente por telefone:</h3>
<ul>
  <li>
    <img src="" alt="Ícone de e-mail">
    <a href="mailto:rigelo@gmail.com">rigelo@gmail.com</a>
  </li>
  <li>
    <img src="" alt="Ícone de telefone">
    <a href="tel:+5515993989764">(15)99398-9764</a>
  </li>
  <li>
    <img src="" alt="Ícone do Whatsapp">
    <a href="tel:+5515993989764">(15)99398-9764</a>
  </li>
  <li>
    <img src="" alt="Ícone de relógio">
    <span>Aberto de segunda à sexta, das 8h às 16h.</span>
  </li>
  <li>
    <img src="" alt="Ícone de localização">
    <span>(inserir localização aqui)</span>
  </li>
</ul>

<form action="php/functions/contato_registrar.php" method="post">
  <fieldset>
    <legend>Fale Conosco</legend>

    <input type="text" name="nome" placeholder="Como deseja ser chamado?" required maxlength="100">
    <input type="email" name="email" placeholder="Digite seu e-mail" required maxlength="100">
    <input type="tel" name="telefone" placeholder="Digite seu telefone" required maxlength="30">
    <input type="text" name="texto" placeholder="Qual seu interesse?" required maxlength="500">

    <input type="submit">
  </fieldset>
</form>