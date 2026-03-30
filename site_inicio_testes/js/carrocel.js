let indice = 0;
const imagens = document.querySelectorAll(".carrocel img");

function imagem_na_tela(tela)
{
    imagens.forEach(img => img.classList.remove("ativa"));
    imagens[tela].classList.add("ativa");
}

function proximo()
{
    indice = (indice + 1) % imagens.length;
    imagem_na_tela(indice);
}

function anterior()
{
    indice = (indice - 1 + imagens.length) % imagens.length;
    imagem_na_tela(indice);
}