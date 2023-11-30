let ult_alvo = ""

// Função para verificar se um elemento está visível no viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

// Função para adicionar classe 'visible' aos elementos que estão no viewport
function handleScroll() {
    const elements = document.querySelectorAll('.fade-in');
    elements.forEach((element) => {
        if (isElementInViewport(element)) {
            element.classList.add('visible');
        }
    });
}

// Adicione um event listener para o evento 'scroll'
window.addEventListener('scroll', handleScroll);

// Execute a função ao carregar a página para verificar os elementos visíveis inicialmente
window.addEventListener('load', handleScroll);

function exibe_guia(obj_alvo) {

    if (!obj_alvo)
        return

    const cases = {
        "btn_home_page": "home-page-component",
        "btn_login_registro": "login-register-component",
        "btn_products": "products-component",
        "btn_comodato": "comodato-component",
        "btn_contact": "contact-component",
        "btn_trocar_senha": "change-password-component"
    }

    console.log("a", obj_alvo)

    const alvo = document.getElementById(cases[obj_alvo])

    Object.keys(cases).forEach(key => {
        console.log(key, cases[key])

        document.getElementById(cases[key]).style.display = "none"
    })

    // Mostrando novamente o alvo selecionado
    if (alvo)
        if (alvo.style.display == "none")
            alvo.style.display = "block"

    ult_alvo = obj_alvo
}