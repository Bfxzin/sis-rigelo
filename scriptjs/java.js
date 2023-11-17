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


