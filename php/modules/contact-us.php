<div class="contact-us-container">
  <div>
    <h3>Entre em contato</h3>
    <p>Ficou com alguma dúvida? Quer solicitar um orçamento? Entre em contato conosco através dos canais abaixo. Oferecemos atendimento personalizado para proporcionar uma experiência única a nossos clientes!</p>
    <h3>Pedidos somente por telefone:</h3>
    <ul>
      <li>
        <i class="fa-solid fa-envelope"></i>
        <a href="mailto:rigelo@gmail.com">rigelo@gmail.com</a>
      </li>
      <li>
        <i class="fa-solid fa-phone"></i>
        <a href="tel:+5515993989764">(15) 98177-7432</a>
      </li>
      <li>
        <i class="fa-brands fa-whatsapp"></i>
        <a href="tel:+5515993989764">(15) 98177-7432</a>
      </li>
      <li>
        <i class="fa-solid fa-clock"></i>
        <span>Aberto de segunda à sexta, das 8h às 16h.</span>
      </li>
      <li>
        <i class="fa-solid fa-location-dot"></i>
        <span>(inserir localização aqui)</span>
      </li>
    </ul>
  </div>

  <form action="php/functions/contato_registrar.php" method="post">
    <fieldset>
      <legend>Fale Conosco</legend>
      <input type="text" maxlength="100" name="nome" placeholder="Como deseja ser chamado?" required>
      <input type="email" maxlength="100" name="email" placeholder="Digite seu e-mail" required>
      <input type="tel" maxlength="30" name="telefone" placeholder="Digite seu telefone" required>
      <input type="text" maxlength="500" name="texto" placeholder="Qual seu interesse?" required>
      <input type="submit" placeholder="Enviar">
    </fieldset>
  </form>
</div>