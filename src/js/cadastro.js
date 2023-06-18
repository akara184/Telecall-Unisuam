//NÚMEROS JÁ PRÉ DEFINIDO O FORMATO
$(document).ready(function () {
  $("#cpf").mask("000.000.000-00");
  $("#tell1").mask("(+55)00-000000000");
  $("#tell2").mask("(+55)00-00000000");
});

//Validação do formulário
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
      message: "O nome deve ter entre 15 e 60 caracteres e conter apenas letras",
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
      message: "O Nome Materno é obrigatório",
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
      message: "Insira uma data",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });

    return;
  } else if (sexo == "Selecione") {
    $("#sexo").focus();
    bulmaToast.toast({
      message: "Selecione um sexo",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (cpf.length < 14) {
    $("#cpf").focus();
    bulmaToast.toast({
      message: "Insira um CPF no formato: EX:000.000.000-00",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (!tell1.match(/^\(\+55\)\d{2}-\d{9}$/)) {
    $("#tell1").focus();
    bulmaToast.toast({
      message: "Insira um telefone celular no formato: EX: (+55)XX-XXXXXXXXX",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (!tell2.match(/^\(\+55\)\d{2}-\d{8}$/)) {
    $("#tell2").focus();
    bulmaToast.toast({
      message: "Insira um telefone fixo no formato: EX: (+55)XX-XXXXXXXX",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (endereco == "") {
    $("#endereco").focus();
    bulmaToast.toast({
      message: "O endereço é obrigatório",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (!login.match(/^[a-zA-Z]{6}$/)) {
    $("#login").focus();
    bulmaToast.toast({
      message: "O campo Login deve ter exatamente 6 caracteres alfabéticos.",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (!senha1.match(/^[a-zA-Z]{8}$/)) {
    $("#senha1").focus();
    bulmaToast.toast({
      message: "O campo Senha deve ter 8 caracteres alfabéticos",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (!senha2.match(/^[a-zA-Z]{8}$/)) {
    $("#senha2").focus();
    bulmaToast.toast({
      message: "O campo Senha deve ter 8 caracteres alfabéticos.",
      type: "is-link",
      position: "center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (senha1 !== senha2) {
    bulmaToast.toast({
      message: "As senhas não conferem",
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
    
    //LOCAL STORAGE
    localStorage.setItem("login", login);
    localStorage.setItem("senha", senha1);
    
    window.location.href = "/src/pages/login/login.html";
  }
});