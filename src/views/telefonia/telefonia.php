<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telefonia - Telecall</title>
    <link rel="stylesheet" href="../../framework/bulma/bulma/css/bulma.css" />
    <link rel="icon" type="image/jpg" href="../../images/Untitled.png">
    <link rel="stylesheet" href="../../views/telefonia/telefonia.css" />
    <link rel="stylesheet" href="../../vendors/fontawesome/css/all.css" />
    <link rel="stylesheet" href="../../frameworks/swiper/swiper/swiper-element-bundle.css">
    <link rel="stylesheet" href="../../vendors/aos/aos/dist/aos.css">
    <link rel="stylesheet" href="../../layouts/nav.css">
    <link rel="stylesheet" href="../../layouts/acessibilidade.css">
    <script src="../../js/jquery-3.7.0.js.js"></script>
    <script src="../../framework/bulma/bulma/bulma-toast/dist/bulma-toast.min.js"></script>
    <script src="../../frameworks/swiper/swiper/swiper-element-bundle.min.js"></script>
    <script src="../../vendors/aos/aos/dist/aos.js"></script>
    <script src="../../js/acessibilidade.js"></script>

</head>

<body>
    <!--INICIO DA NAV -->
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <!--Logo / Brand-->
        <div class="navbar-brand">
            <a class="navbar-item" id="logoid" href="../../views/main/index.php">
                <img src="../../images/telecall-logo-removebg-preview.png" alt="site logo" class="">
            </a>
            <a role="button" class="navbar-burger " aria-label="menu" aria-expanded="true">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarMain" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="../../views/main/index.php">
                    Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="../../views/internet/internet.php">
                        Internet
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active"
                            href="../../views/internet/internet-dedicada/internet-dedicada.php">
                            Internet Dedicada
                        </a>
                        <a class="navbar-item disabled">
                            Banda larga
                        </a>
                        <a class="navbar-item disabled">
                            Wi-Fi
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="../../views/telefonia/telefonia.php">
                        Telefonia
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="../../views/telefonia/pabx/pabx.php">
                            PABX IP Virtual
                        </a>
                        <a class="navbar-item disabled">
                            Números 0800 e 40XX
                        </a>

                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="../../views/rede-e-infa/infra.php">
                        Rede e infraestrutura
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="../../views/rede-e-infa/ponto-a-ponto/ponto-a-ponto.php">
                            Ponto-a-Ponto
                        </a>
                        <a class="navbar-item disabled">
                            MPLS
                        </a>
                        <a class="navbar-item disabled">
                            Fibra Apagada e Dutos
                        </a>
                        <a class="navbar-item disabled">
                            Co-location
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="../../views/mobilidade/mobilidade.php">
                        Mobilidade
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="../../views/mobilidade/celular-emp/celular-emp.php">
                            Celular Empresarial
                        </a>
                        <a class="navbar-item disabled">
                            MPLS
                        </a>
                        <a class="navbar-item disabled">
                            MVNA/E
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="../../views/cpaas/cpaas.php">
                        CPaaS
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item is-active" href="../../views/cpaas/doisFA/doisFA.php">
                            2FA
                        </a>
                        <a class="navbar-item is-active" href="../../views/cpaas/mascara/mascara.php">
                            Número Máscara
                        </a>
                        <a class="navbar-item is-active" href="../../views/cpaas/calls/calls.php">
                            Google Verified Calls
                        </a>
                        <a class="navbar-item is-active" href="../../views/cpaas/sms/sms.php">
                            SMS Programável
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <button id="dark-mode-toggle" aria-label="Alternar modo claro/escuro">
                        <i class="fa-solid fa-moon"></i>
                    </button>&nbsp &nbsp &nbsp &nbsp
                    <a id="zoom-in">
                        <i class="fa-solid fa-circle-plus"></i>
                    </a> &nbsp &nbsp &nbsp
                    <a id="zoom-out">
                        <i class="fa-solid fa-circle-minus"></i>
                    </a>
                </div>
                <div class="navbar-item" id="responsiveButton">
                    <div class="buttons">
                        <a class="button is-light" id="buttonlogin" href="../../views/login/login.php">
                            <i class="fa-solid fa-circle-user" id="loginIcon"></i>
                            Área do cliente
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--FINAL DA MINHA NAV-->

    <!--COMEÇO DA SECTION-->
    <section class="hero is-fullheight">
        <img src="../../images/banner-telefonia.png" alt="">
    </section>

    <section class="section is-large">
        <h1 class="title is-2 alinhado blue">Desvende a revolução digital com nossos planos de internet exclusivos!
        </h1>
        <div class="columns is-multiline" data-aos="fade-left" data-aos-easing="linear">
        <div class="columns mt-5 is-8 is-variable is-centered">
            <div class="column is-4-tablet is-5-desktop">
                <div class="card">
                        <div class="card-content">
                            <div class="card-image has-text-centered px-4">
                                <img src="../../images/tel.png" alt="">
                                <p class="title is-4 blue">PABX IP VIRTUAL</p>
                            </div>
                            <hr>
                            <p class="subtitle is-size-6 blue">Uma solução de comunicação inteligente que vai <span
                                    class="red">reduzir seus gastos</span>, <span class="red">aumentar sua
                                    produtividade</span> e <span class="red">fidelizar seus clientes</span>.
                        </div>
                        <footer class="card-footer">
                            <p class="card-footer-item">
                                <a href="../../views/telefonia/pabx/pabx.php">
                                    <button class="button aProduct">Saiba mais</button></a>
                            </p>
                        </footer>
                    </div>
                </div>
                <div class="column is-4-tablet is-5-desktop">
                    <div class="card disabled">
                        <div class="card-content">
                            <div class="card-image has-text-centered px-4">
                                <img src="../../images/tel2.png" alt="">
                                <p class="title is-4 blue">Números 0800 e 40XX</p>
                            </div>
                            <hr>
                            <p class="subtitle is-size-6 blue"><span class="red">Seus clientes</span> sempre ligarão com
                                o
                                <span class="red">custo de uma chamada local</span>, não importa em qual cidade do
                                Brasil
                                eles estejam.
                            </p>
                        </div>

                        <footer class="card-footer">
                            <p class="card-footer-item">
                                <a href="banda-larga/banda-larga.php"> <button class="button aProduct">Saiba
                                        mais</button></a>
                            </p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FINAL DA SECTION-->

    <!--INICIO DO EMAIL PARA CONTATO-->

    <div class="section has-background-light contact" id="contact">
        <div class="container">
            <div class="columns is-multiline" data-aos="fade-in-up" data-aos-easing="linear">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title red">
                        Entre em contato pelo Email
                    </h1>
                </div>
                <div class="column is-8 is-offset-2">
                    <form action="#" method="POST">
                        <div class="field">
                            <label class="nome red">Nome</label>
                            <div class="control has-icons-left">
                                <input class="input" type="text" placeholder="Ex. Vasco da Gama" name="Name" />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="email red">Email</label>
                            <div class="control has-icons-left">
                                <input class="input" type="email" placeholder="Ex. vasco@gmail.com" name="Email" />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label red">Message</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="CHORA QUE EU TE ESCUTO"
                                    name="Message"></textarea>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button class="button is-large is-fullwidth  is-link submit-button">
                                    Enviar&nbsp;&nbsp; <!--Espaço sem quebra-->
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--FINAL DO EMAIL PARA CONTATO-->

    <!--INICIO DO FOOTER-->
    <footer id="footer" class="mt-4">
        <div class="container">
            <div class="columns is-multiline is-centered">
                <div class="column is-4-fullhd is-3-widescreen is-4-desktop is-6-tablet is-12-mobile mb-6">
                    <a href="../../views/main/index.php" class="logo is-flex is-centered">
                        <img alt="telecall" src="../../images/telecall-nome.png" height="35" width="150">
                    </a>
                    <p class="subtitle is-6 footer-description">
                        contatos: <br>
                        Email: suporte@telecall.com <br>
                        Tel: (21) 3030-1010
                    </p>
                    <div class="social-links is-flex mt-3">
                        <a href="https://www.linkedin.com/company/telecall?originalSubdomain=br" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.facebook.com/TelecallBr/?locale=pt_BR" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/telecallbr/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="mailto:suporte@telecall.com" target="_blank">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="column is-2-widescreen is-4-desktop is-6-tablet is-12-mobile">
                    <a href="../../views/internet/internet.php" <h3
                        class="pb-1 mb-0 is-size-6 has-text-weight-bold">Internet</h3></a>
                    <nav class="footer-nav">
                        <ul>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="../../views/internet/internet-dedicada/internet-dedicada.php">Internet</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right" style="color: #cc0000;"></i>
                                <a class="">Banda larga</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right" style="color: #cc0000;"></i>
                                <a>Wi-fi</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="column is-2-widescreen is-4-desktop is-6-tablet is-12-mobile">
                    <a href="../../views/telefonia/telefonia.php">
                        <h3 class="pb-1 mb-0 is-size-6 has-text-weight-bold">Telefonia</h3>
                    </a>
                    <nav class="footer-nav">
                        <ul>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="../../views/telefonia/pabx/pabx.php">PABX IP Virtual</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right" style="color: #cc0000;"></i>
                                <a>Números 0800 e 40XX</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="column is-2-widescreen is-4-desktop is-6-tablet is-12-mobile">
                    <a href="../../views/rede-e-infa/infra.php">
                        <h3 class="pb-1 mb-0 is-size-6 has-text-weight-bold">Rede e Infraestrutura</h3>
                    </a>
                    <nav class="footer-nav">
                        <ul>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="../../views/rede-e-infa/ponto-a-ponto/ponto-a-ponto.php">Ponto a Ponto</a>
                            </li>
                            <i class="fa-solid fa-chevron-right" style="color: #cc0000;"></i>
                            <a>MPLS</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right" style="color: #cc0000;"></i>
                                <a>Fibra Apagada e Dutos</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right" style="color: #cc0000;"></i>
                                <a>Co-location</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="column is-2-fullhd is-3-widescreen is-4-desktop is-6-tablet is-12-mobile">
                    <a href="../../views/mobilidade/mobilidade.php">
                        <h3 class="pb-1 mb-0 is-size-6 has-text-weight-bold">Mobilidade</h3>
                    </a>
                    <nav class="footer-nav">
                        <ul>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="../../views/mobilidade/celular-emp/celular-emp.php">Celular Empresarial</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right" style="color: #cc0000;"></i>
                                <a>MPLS</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right" style="color: #cc0000;"></i>
                                <a>MVNA/E</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="copyright-text has-text-centered">


                Copyright © 2023 Telecall. Todos os direitos reservados.

            </div>
        </div>
    </footer>
    <!--FINAL DO FOOTER-->



    <script src="../../js/fade.js"></script>
    <script src="../../js/mobilemenu.js"></script>
</body>

</html>