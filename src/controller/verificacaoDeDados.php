<?php
class verificarDados
{
//UMA OBSERVAÇÃO:
//ISSO É SÓ UMA IDEIA DE VERIFICAÇÃO DE DADOS NA HORA DE CADASTRO,
//NÃO É ALGO FIXO, MAS SÓ UMA IDEIA DE COMO VERIFICAR CADA CAMPO.

    private $nome;
    private $nomeMaterno;
    private $dataDeNascimento;
    private $sexo;
    private $cpf;
    private $telefoneCelular;
    private $telefoneFixo;
    private $endereco;
    private $login;
    private $senha;
    private $confirmeSenha;

    public function __construct(
        $nome,
        $nomeMaterno,
        $dataDeNascimento,
        $sexo,
        $cpf,
        $telefoneCelular,
        $telefoneFixo,
        $endereco,
        $login,
        $senha,
        $confirmeSenha
    ) {
        $this->nome = $nome;
        $this->nomeMaterno = $nomeMaterno;
        $this->dataDeNascimento = $dataDeNascimento;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
        $this->telefoneCelular = $telefoneCelular;
        $this->telefoneFixo = $telefoneFixo;
        $this->endereco = $endereco;
        $this->login = $login;
        $this->senha = $senha;
        $this->confirmeSenha = $confirmeSenha;
    }

    private function validarNome()
    {
        return (strlen($this->nome) >= 15 && strlen($this->nome) <= 60 && preg_match('/^[a-zA-Z\s]+$/', $this->nome)) ? true : false;
    }

    private function validarNomeMaterno()
    {
        return ($this->nomeMaterno == "") ? false : true;
    }

    private function validarDataDeNascimento()
    {
        return (filter_var($this->dataDeNascimento, FILTER_SANITIZE_EMAIL)) ? true : false;
    }

    private function validarSexo()
    {
        return ($this->sexo === "Selecione") ? false : true;
    }

    private function validarCPF()
    {
        return (strlen($this->cpf) >= 14) ? true : false;
    }

    private function validarTelefoneCelular()
    {
        return (preg_match('/^\(\+55\)\d{2}-\d{9}$/', $this->telefoneCelular)) ? true : false;
    }

    private function validarTelefoneFixo()
    {
        return (preg_match('/^\(\+55\)\d{2}-\d{8}$/', $this->telefoneFixo)) ? true : false;
    }

    private function validarEndereco()
    {
        return ($this->endereco == "") ? false : true;
    }

    private function validarLogin()
    {
        return (preg_match('/^[a-zA-Z]{6}$/', $this->login)) ? true : false;
    }

    private function validarSenha()
    {
        return (preg_match('/^[a-zA-Z]{8}$/', $this->senha)) ? true : false;
    }

    private function confirmaSenha()
    {
        return ($this->senha === $this->confirmeSenha) ? true : false;
    }
}
