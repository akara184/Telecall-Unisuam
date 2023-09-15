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


<?php 

include_once '../../includes/nav.php';
?> 


<body>
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
                    <a href="../../views/redefinirSenha/redefinirSenha.php" class="is-size-7 has-text-link">Alterar senha?</a>
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
                            class="has-text-link">Inscreva-se</a>
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