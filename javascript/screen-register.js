function restrictInput(element, pattern, maxLength) { /* respeitando o padrao de caracteres */
  element.value = element.value.replace(pattern, '');

  if (element.value.length > maxLength) /* respeitando a quantia de caracteres */
    element.value = element.value.substring(0, maxLength);
}

const component = document.querySelector('#login-register-component');
// component.innerHTML = loginContainer;

const button = document.querySelector('.register');

if (button)
  button.onclick = () => {
    // component.innerHTML = registerContainer;
    document.querySelector('#form-registro').style.display="block"
    document.querySelector('#box-login').style.display="none"
  }