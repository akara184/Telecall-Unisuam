//mobile menu

const burgerIcon = document.querySelector(".navbar-burger");
const navbarMenu = document.querySelector(".navbar-menu");

burgerIcon.addEventListener('click', () => {
    navbarMenu.classList.toggle("is-active");
    burgerIcon.classList.toggle("is-active");

});


$("#entrarcor").click(function(){
    var login = $("#login").val();
    var senha = $("#senha").val();
    
    if (login == ""){
        $("#login").focus();
        bulmaToast.toast({ 
            message: 'DIGITE UM LOGIN', 
            type: 'is-link', 
            position: 'bottom-center', 
            pauseOnHover: true,
            dismissible: true,
            closeOnClick: true,
            opacity: 1, })
        return;
    }
    else if (senha == ""){
        $("#senha").focus();
        $("#login").focus();
        bulmaToast.toast({ 
            message: 'DIGITE UMA SENHA', 
            type: 'is-link', 
            position: 'bottom-center', 
            pauseOnHover: true,
            dismissible: true,
            closeOnClick: true,
            opacity: 1, })
        return;

    }
})