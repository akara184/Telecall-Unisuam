
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
                        <a class="navbar-item is-active" href="../../views/internet/internet-dedicada/internet-dedicada.php">
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
                        <a class="navbar-item is-active">
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
                        <a class="navbar-item is-active" href="views/cpaas/mascara/mascara.php">
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
                <div class="navbar-item has-dropdown" id="responsiveButton">
                    <div class="buttons navbar-item">
                        <a class="button is-light" id="buttonlogin" href="../../views/login/login.php" >
                            <i class="fa-solid fa-circle-user" id="loginIcon"></i>
                            Área do cliente
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <!--FINAL DA MINHA NAV-->