<?include_once('../../controller/bd.php')?>

<!DOCTYPE html>
<html lang="pt-BR" class="has-navbar-fixed-top">
<!--A framwork BULMA na documentação sugere essa classe na tag HTML. -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Telecall</title>
    <link rel="stylesheet" href="../../framework/bulma/bulma/css/bulma.css">
    <link rel="icon" type="image/jpg" href="../../images/Untitled.png">
    <link rel="stylesheet" href="../../views/cadastro/cadastro.css">
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
                        <a class="navbar-item is-active"
                            href="../../views/rede-e-infa/ponto-a-ponto/ponto-a-ponto.php">
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

    <!--INICIO DO MEU CADASTRO-->

    <form action="../../views/login/login.php" method="post">
        <section class="hero is-fullheight ">
            <div class="hero-body is-justify-content-center">
                <div class="columns is-flex is-flex-direction-column box">
                    <p class="title is-1">Crie sua conta na <span class="corVermelho">Telecall</span></p>
                    <p class="subtitle is-5" id="pCinza">Explore um novo mundo de comunicação e colaboração.</p>

                    <div class="field">
                        <label class="label">Nome:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="nome" name="nome" type="text" placeholder="Digite seu nome completo"
                                        required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                <p class="help is-link">O campo nome <span class="exatamente"> deve ter no mínimo 15
                                        caracteres e no máximo 60 caracteres alfabéticos</span></p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nome Materno:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="nomeMaterno" name="nomeMaterno" type="text"
                                        placeholder="Digite seu nome materno" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>

                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Data de Nascimento:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="dataDeNascimento" name="dataDeNascimento" type="date" max="9999-12-31" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-calendar"></i>
                                    </span>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Sexo:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                <div class="select">
                                    <select id="sexo" name="sexo">
                                        <option>Selecione</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">CPF:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="cpf" name="cpf" type="text" placeholder="Digite seu CPF" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-id-card"></i>
                                    </span>
                                <p class="help is-link">EX: 000.000.000-00</p>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Telefone Celular:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="telefoneCelular" name="telefoneCelular" type="tel" placeholder="Digite seu telefone celular"
                                        required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-mobile-alt"></i>
                                    </span>
                                <p class="help is-link">EX:(+55)DD-000000000</p>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Telefone Fixo:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="telefoneFixo" name="telefoneFixo" type="tel" placeholder="Digite seu telefone fixo"
                                        required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                <p class="help is-link">EX:(+55)DD-00000000</p>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Endereço Completo:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="endereco" name="endereco" type="text"
                                        placeholder="Digite seu endereço completo" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Login:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="login" name="login" type="text" placeholder="Digite seu login" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa-solid fa-user-lock"></i>
                                    </span>
                                <p class="help is-link">O campo Login deve ter <span
                                        class="exatamente">exatamente</span> 6
                                    caracteres alfabéticos.</p>

                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Senha:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="senha" name="senha" type="password" placeholder="Digite sua senha"
                                        required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                <p class="help is-link">O campo Senha <span class="exatamente"> deve ter 8 caracteres
                                        alfabéticos</span>.</p>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Confirme a Senha:</label>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" id="confirmeSenha" name="confirmeSenha" type="password" placeholder="Confirme sua senha"
                                        required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                <p class="help is-link">O campo Senha <span class="exatamente"> deve ter 8 caracteres
                                        alfabéticos</span>, idêntico ao primeiro.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="column">
                            <button class="button is-fullwidth is-medium" name="cadastro" id="cadastro" type="button"
                                value="Submit input">Cadastre-se</button>
                        </div>
                        <div class="column">
                            <button class="button is-fullwidth is-medium" id="resetar" type="reset"
                                value="Submit input">Resetar formulário</button>
                        </div>
                    </div>
                </div>
            </div>
            <p class="subtitle is-6" id="pcop">© Telecall 2023 </p>
        </section>
    </form>
    <!--FINAL DO CADASTRO-->



    <script src="../../js/mobilemenu.js"></script>
    <script src="../../js/cadastro.js"></script>
</body>

</html>