<?php 
    include('../bdController/bd.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $nomeMaterno = $_POST['nomeMaterno'];
        $dataDeNascimento = $_POST['dataDeNascimento'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $telefoneCelular = $_POST['telefoneCelular'];
        $telefoneFixo = $_POST['telefoneFixo'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $confirmeSenha = $_POST['confirmeSenha'];
    }
//O PHP ESTÁ PEGANDO OS DADOS E REDIRECIOANANDO PARA ESSA PAGINA
    var_dump($_POST); //VARDUMP DE TESTE
?>