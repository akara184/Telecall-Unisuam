$("#entrarcor").click(function () {
  var login = $("#login").val();
  var senha = $("#senha").val();

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
  localStorage.setItem("login", login);
  localStorage.setItem("senha", senha);

  window.location = "/src/pages/main/index.html";
});
