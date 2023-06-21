// Menu mobile //
const nav = document.querySelector(".nav");
const btnMenu = document.querySelector(".btn-menu");
const menu = document.querySelector(".menu");
const body = document.querySelector("body")

function handleButtonClick(event) {
  if (event.type === "touchstart") event.preventDefault();
  event.stopPropagation();
  nav.classList.toggle("active");
  handleClickOutside(menu, () => {
    nav.classList.remove("active");
    setAria();
  });
  setAria();
}

function handleClickOutside(targetElement, callback) {
  const html = document.documentElement;
  function handleHTMLClick(event) {
    if (!targetElement.contains(event.target)) {
      targetElement.removeAttribute("data-target");
      html.removeEventListener("click", handleHTMLClick);
      html.removeEventListener("touchstart", handleHTMLClick);
      callback()
    }
  }
  if (!targetElement.hasAttribute("data-target")) {
    html.addEventListener("click", handleHTMLClick);
    html.addEventListener("touchstart", handleHTMLClick);
    targetElement.setAttribute("data-target", "");
  }
}

function setAria() {
  const isActive = nav.classList.contains("active");
  btnMenu.setAttribute("aria-expanded", isActive);
  if (isActive) {
    btnMenu.setAttribute("aria-label", "Fechar Menu");
    body.classList.add("scrollBlock");
  } else {
    btnMenu.setAttribute("aria-label", "Abrir Menu");
    body.classList.remove("scrollBlock");
  }
}

btnMenu.addEventListener("click", handleButtonClick);
btnMenu.addEventListener("touchstart", handleButtonClick);

//  Quando clicar em um item do link do menu, esconder menu

const links = document.querySelectorAll('nav ul li a')
for (const link of links) {
  link.addEventListener('click', function () {
    nav.classList.remove('active')
    body.classList.remove("scrollBlock");
  })
}

//Formulario de contato

function validarFormulario() {
  var nome = document.forms["contato"]["nome"].value;
  var celular = document.forms["contato"]["celular"].value;
  var email = document.forms["contato"]["email"].value;
  var mensagem = document.forms["contato"]["mensagem"].value;

  // Verifica se os campos estão vazios
  if (nome == "" || celular == "" || email == "" || mensagem == "") {
    alert("Por favor, preencha todos os campos.");
    return false;
  }

  // Verifica o formato do e-mail
  // var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2, 3})+$/;
  // if (!email.match(emailRegex)) {
  //   alert("Por favor, insira um endereço de e-mail válido.");
  //   return false;
  // }
}

var swiper = new Swiper('.mySwiper', {
  slidesPerView: 'auto',
  slidesPerGroup: 2,
  slidesPerColumnFill: 'row',
  slidesPerColumn: 2,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});