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
    $("#tell1").mask("(+55) 00-000000000");
    $("#tell2").mask("(+55) 00-000000000");
})

