window.addEventListener("scroll", function () {
  const element = document.getElementById("navegation");
  if (window.scrollY > 50) {
    // A ação acontece após 50px de rolagem
    element.classList.add("scrolled"); // Adiciona a classe que aplica o background
  } else {
    element.classList.remove("scrolled"); // Remove a classe quando voltar ao topo
  }
});
