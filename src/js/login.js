//VERIFICAÇÃO AO CLICAR NO BUTTON
$("#entrar").click(function () {
  var login = $("#idlogin").val();
  var senha = $("#idsenha").val();

  if (login == "") {
    $("#login").focus();
    bulmaToast.toast({
      message: "Digite um login",
      type: "is-link",
      position: "bottom-center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  } else if (senha == "") {
    $("#senha").focus();
    bulmaToast.toast({
      message: "Digite uma senha",
      type: "is-link",
      position: "bottom-center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
    return;
  }
  //LOCAL STORAGE
  
  if(login == localStorage.getItem("login") && senha == localStorage.getItem("senha")){
    window.location = "../../pages/main/index.html";
  }
  else{
    bulmaToast.toast({
      message: "Usuário inválido",
      type: "is-link",
      position: "bottom-center",
      pauseOnHover: true,
      dismissible: true,
      closeOnClick: true,
      opacity: 1,
    });
  }
});
