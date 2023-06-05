//mobile menu
const burgerIcon = document.querySelector(".navbar-burger");
const navbarMenu = document.querySelector(".navbar-menu");
const heroSection = document.querySelector(".hero");

burgerIcon.addEventListener('click', () => {
    navbarMenu.classList.toggle("is-active");
    burgerIcon.classList.toggle("is-active");

    if (navbarMenu.classList.contains("is-active")) {
        heroSection.style.display = 'none';
    } else {
        heroSection.style.display = 'flex';
    }
});

$(document).ready(function(){
    $("#cpf").mask("000.000.000-00");
    $("#tell1").mask("(+55)00-000000000");
    $("#tell2").mask("(+55)00-000000000");
})

$("#idcadastro").click(function(){
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
        alert("Nome");
        $("#nome").focus();
        return;
      } 
    else if (nomeMaterno == ""){
        alert("nome materno");
        $("#nomeMaterno").focus();
        return;
    }
    else if (data == ""){
        alert("data");
        $("#data").focus();

        return;
    }
    else if (sexo == "Selecione"){
        alert("selecione o sexo");
        $("#sexo").focus();
        return;
    }
    else if (cpf.length < 14){
        alert("cpf");
        $("#cpf").focus();
        return;
    }
    else if (!tell1.match(/^\(\+55\)\d{2}-\d{9}$/)){
        alert("telefone celular");
        $("#tell1").focus();
        return;
    }
    else if (!tell2.match(/^\(\+55\)\d{2}-\d{9}$/)){
        alert("telefone fixo");
        $("#tell2").focus();
        return;
    }
    else if (endereco == ""){
        alert("endereco");
        $("#endereco").focus();
        return;
    }
    else if (!login.match(/^[a-zA-Z]{6}$/)){
        alert("login");
        $("#login").focus();
        return;
    }
    else if (!senha1.match(/^[a-zA-Z]{8}$/)){
        alert("senha1");
        $("#senha1").focus();
        return;
    }
    else if (!senha2.match(/^[a-zA-Z]{8}$/)){
        alert("senha2");
        $("#senha2").focus();
        return;
    }
    else if (senha1 !== senha2){
        alert("As senhas não são iguais")
        return;
    }
});