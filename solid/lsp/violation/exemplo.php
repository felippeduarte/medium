<?php

class Pessoa
{
    protected $nome;
    protected $dataNascimento;

    public function getNome()
    {
        return $this->nome;
    }
    
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
}

class PessoaFisica extends Pessoa
{
    protected $rg;
    protected $cpf;

    public function getRg()
    {
        return $this->rg;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
}
class PessoaJuridica extends Pessoa
{
    protected $inscricaoEstadual;
    protected $cnpj;

    public function getInscricaoEstadual()
    {
        return $this->inscricaoEstadual;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }
}

$pessoa = new Pessoa();
if($pessoa instanceOf PessoaFisica) {
    $documento = $pessoa->getCpf();
} else {
    $documento = $pessoa->getCnpj();
}