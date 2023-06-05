//mobile menu
const burgerIcon = document.querySelector(".navbar-burger");
const navbarMenu = document.querySelector(".navbar-menu");
const heroSection = document.querySelector(".hero");

burgerIcon.addEventListener("click", () => {
  navbarMenu.classList.toggle("is-active");
  burgerIcon.classList.toggle("is-active");

  if (navbarMenu.classList.contains("is-active")) {
    heroSection.style.display = "none";
  } else {
    heroSection.style.display = "flex";
  }
});

//VALIDAÇÃO DO MEU CADASTRO
$(document).ready(function () {
  $("#cpf").mask("000.000.000-00");
  $("#tell1").mask("(+55)00-000000000");
  $("#tell2").mask("(+55)00-000000000");
});

$("#idcadastro").click(function () {
  var nome = $("#nome").val();
  var nomeMaterno = $("#nomeMaterno").val();
  var data = $("#data").val();
  var sexo = $("#sexo").val();
  var cpf = $("#cpf").val();
  var tell1 = $("#tell1").val();
  var tell2 = $("#tell2").val();
  var endereco = $("#endereco").val();
  var login = $("#login").val();
  var senha1 = $("#senha1").val();
  var senha2 = $("#senha2").val();

  if (nome.length < 15 || nome.length > 60 || !nome.match(/^[a-zA-Z\s]+$/)) {
    $("#nome").focus();
    bulmaToast.toast({
      message: "NOME INVÁLIDO",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (nomeMaterno == "") {
    $("#nomeMaterno").focus();
    bulmaToast.toast({
      message: "NOME MATERNO INVÁLIDO",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (data == "") {
    $("#data").focus();
    bulmaToast.toast({
      message: "INSIRA UMA DATA DE NASCIMENTO",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });

    return;
  } else if (sexo == "Selecione") {
    bulmaToast.toast({
      message: "SELECIONE O SEU SEXO",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    $("#sexo").focus();
    return;
  } else if (cpf.length < 14) {
    bulmaToast.toast({
      message: "INSIRA UM CPF. EX:000.000.000-00",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    $("#cpf").focus();
    return;
  } else if (!tell1.match(/^\(\+55\)\d{2}-\d{9}$/)) {
    bulmaToast.toast({
      message: "INSIRA TELEFONE CELULAR. EX: (+55)XX-XXXXXXXXX",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    $("#tell1").focus();
    return;
  } else if (!tell2.match(/^\(\+55\)\d{2}-\d{9}$/)) {
    bulmaToast.toast({
      message: "INSIRA TELEFONE FIXO. EX: (+55)XX-XXXXXXXXX",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    $("#tell2").focus();
    return;
  } else if (endereco == "") {
    bulmaToast.toast({
      message: "INSIRA TELEFONE ENDEREÇO",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    $("#endereco").focus();
    return;
  } else if (!login.match(/^[a-zA-Z]{6}$/)) {
    bulmaToast.toast({
      message: "INSIRA UM LOGIN NO FORMATO CORRETO",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    $("#login").focus();
    return;
  } else if (!senha1.match(/^[a-zA-Z]{8}$/)) {
    bulmaToast.toast({
      message: "INSIRA UMA SENHA NO FORMATO CORRETO",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    $("#senha1").focus();
    return;
  } else if (!senha2.match(/^[a-zA-Z]{8}$/)) {
    bulmaToast.toast({
      message: "CONFIRME A SENHA NO FORMATO CORRETO",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    $("#senha2").focus();
    return;
  } else if (senha1 !== senha2) {
    bulmaToast.toast({
      message: "AS SENHAS NÃO CONFEREM",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else {
    bulmaToast.toast({
      message: "USUÁRIO CRIADO COM SUCESSO",
      type: "is-success",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    
    localStorage.setItem("login", login);
    localStorage.setItem("senha", senha1);
    
    window.location.href = "/src/pages/login/login.html";
  }
});
//LOCAL STORAGE