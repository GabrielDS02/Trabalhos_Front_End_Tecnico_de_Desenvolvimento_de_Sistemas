// mudar o nome do botão e ainda enviar o formulario
const form = document.querySelector("form");
const botao = document.getElementById("FormButton");

form.addEventListener("submit", function(event) {

    event.preventDefault(); // impede envio imediato

    // muda texto do botão
    botao.innerText = "Enviando dados...";
    botao.disabled = true;

    // espera 1.5 segundos
    setTimeout(() => {
        form.submit(); // agora envia normalmente via GET
    }, 1500);

});



// Função para aparecer o texto para especificar o genero, ao selecionar outro em genero
const radioOutro = document.getElementById("outro");
const textarea = document.getElementById("generoOutro");

radioOutro.addEventListener("change", function() {
  if (this.checked) {
    textarea.style.display = "block";
  }
});

// Esconde se selecionar outro gênero diferente
document.querySelectorAll('input[name="genero"]').forEach(radio => {
  radio.addEventListener("change", function() 
  {
    if (this.id !== "outro") 
    {
      textarea.style.display = "none";
      textarea.value = "";
    }
  });
});
