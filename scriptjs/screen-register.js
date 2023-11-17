document.addEventListener('DOMContentLoaded', function() {
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
