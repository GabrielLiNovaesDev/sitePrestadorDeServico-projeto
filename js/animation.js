// Inicializa o WOW.js
new WOW().init();

// Inicializa o AOS.js
AOS.init();


// Opções para a primeira página (digitação)
var optionsPage1 = {
    strings: [
        "Soluções tecnológicas que simplificam e transformam.",
        "Inovações para o seu negócio.",
        "Transforme seus desafios em soluções."
    ],
    typeSpeed: 50,   // Velocidade de digitação
    backSpeed: 30,   // Velocidade de apagar
    loop: true,      // Loop infinito
    startDelay: 500, // Atraso para começar
    backDelay: 2000  // Tempo de espera antes de apagar
};

// Inicializa o efeito de digitação no primeiro elemento
if (document.querySelector("#texto-animado")) {
    var typed1 = new Typed("#texto-animado", optionsPage1);
}

// Inicializa o Slick carrossel para os serviços
$(document).ready(function () {
    $('.servico-busca').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

// Consolidando o DOMContentLoaded em um único ouvinte
document.addEventListener('DOMContentLoaded', function () {
    // Rolagem suave para "mais soluções"
    document.getElementById('mais-solucoes').addEventListener('click', function () {
        document.getElementById('solucoes').scrollIntoView({
            behavior: 'smooth' // Rolagem suave
        });
    });
});

// ----- Lógica para a Seção "Soluções" ----- //

// Função para mostrar soluções
function mostrarSolução(clicada) {
    const todasSolucoes = document.querySelectorAll('.conteudo_solucoes > div');
    todasSolucoes.forEach(todasSolucoes => {
        todasSolucoes.style.display = 'none';
    });
    const solucao = document.querySelector(`.${clicada}`);
    if (solucao) {
        solucao.style.display = 'block';
    }
}

// Função para gerenciar a classe "ativo" para as soluções
function atualizarClasseAtiva(linkAtivo) {
    const todosLinks = document.querySelectorAll('.box_solucoes a div');
    todosLinks.forEach(link => {
        link.classList.remove('ativo');
    });
    linkAtivo.classList.add('ativo');
}

// Adicionar eventos de clique para todos os links de soluções
document.querySelectorAll('.box_solucoes a').forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault(); // Previne o comportamento padrão de link
        const solucaoId = this.id.replace('solucao', 'solucao-');
        mostrarSolução(solucaoId);
        const linkDiv = this.querySelector('div');
        atualizarClasseAtiva(linkDiv); // Atualiza a classe "ativo" na solução
    });
});

// ----- Lógica para a Seção "Sobre" ----- //

// Função para mostrar sobre
function mostrarSobre(clicada) {
    const todasSobre = document.querySelectorAll('.conteudo_sobre > div');
    todasSobre.forEach(todasSobre => {
        todasSobre.style.display = 'none';
    });
    const sobre = document.querySelector(`.${clicada}`);
    if (sobre) {
        sobre.style.display = 'block';
    }
}

// Função para gerenciar a classe "ativo2" para a seção "Sobre"
function atualizarClasseAtivaSobre(linkAtivo) {
    const todosLinks = document.querySelectorAll('.box_sobre a div');
    todosLinks.forEach(link => {
        link.classList.remove('#ativo2');
    });
    linkAtivo.classList.add('#ativo2');
}

// Adicionar eventos de clique para os links de "Sobre"
document.querySelectorAll('.box_sobre a').forEach(link2 => {
    link2.addEventListener('click', function (event) {
        event.preventDefault(); // Previne o comportamento padrão de link
        const sobreId = this.id.replace('sobre', 'sobre-');
        mostrarSobre(sobreId);
        const linkDiv2 = this.querySelector('div');
        atualizarClasseAtivaSobre(linkDiv2); // Atualiza a classe "ativo2" na seção "Sobre"
    });
});









