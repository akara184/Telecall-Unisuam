<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do cliente - Telecall</title>
    <link rel="stylesheet" href="../../framework/bulma/bulma/css/bulma.css">
    <link rel="icon" type="image/jpg" href="../../images/Untitled.png">
    <link rel="stylesheet" href="../../views/login/login.css">
    <link rel="stylesheet" href="../../vendors/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../layouts/acessibilidade.css">
    <script src="../../js/jquery-3.7.0.js.js"></script>
    <script src="../../js/jquery.mask.min.js"></script>
    <script src="../../framework/bulma/bulma/bulma-toast/dist/bulma-toast.min.js"></script>
    <script src="../../js/acessibilidade.js"></script>
</head>

<body>
    <!--INICIO DA NAVBAR-->
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
                        <a class="navbar-item is-active"  href="../../views/mobilidade/celular-emp/celular-emp.php">
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


    <!--COMEÇO DO MEU LOGIN-->

    <form action="login.php" method="post">
    <section class="hero is-fullheight" id="divdologin">
        <div class="hero-body is-justify-content-center is-align-items-center">
            <div class="columns is-flex is-flex-direction-column box">
                <div class="column">
                    <p class="title is-3">Bem vindo a <span class="corVermelho">Telecall</span> </p>
                    <p class="subtitle is-6" id="pCinza">Bem vindo de volta! Por favor, insira seus dados.</p>
                    <label for="login">Login:</label>
                    <input class="input is-danger" id="login" name="login" type="text" placeholder="Digite aqui seu login" required>
                </div>
                <div class="column">
                    <label for="senha">Senha</label>
                    <input class="input is-danger" id="senha" name="senha" type="password" placeholder="Digite aqui sua senha"
                        required>
                    <a href="../../views/recuperarSenha/recuperarSenha.php" class="is-size-7 has-text-link">Esqueceu a senha?</a>
                </div>
                <div class="field is-grouped">
                    <div class="column">
                        <button class="button is-fullwidth is-medium entrarcor" id="entrar" type="button">Entrar</button>
                    </div>
                    <div class="column">
                        <button class="button is-medium  is-fullwidth entrarcor" id="reset" type="reset">Resetar</button>
                    </div>
                </div>
                <div class="has-text-centered">
                    <p class="is-size-7">Não tem uma conta? <a href="../../views/cadastro/cadastro.php"
                            class="has-text-link"> Inscreva-se</a>
                    </p>
                </div>
            </div>
        </div>
        <p class="subtitle is-6" id="pcop">© Telecall 2023 </p>
    </section>
</form>
    <!--FINAL DO LOGIN-->


    <script src="../../js/mobilemenu.js"></script>
    <script src="../../js/login.js"></script>
</body>

</html>