<?php

abstract class Pessoa
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

    abstract public function getDocumento();
}

class PessoaFisica extends Pessoa
{
    protected $rg;
    protected $cpf;

    public function getRg()
    {
        return $this->rg;
    }

    public function getDocumento()
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

    public function getDocumento()
    {
        return $this->cnpj;
    }
}

class Parceiros
{
    public function buscaParceiro(Pessoa $pessoa)
    {
        $doc = $pessoa->getDocumento();
        \DB::table('parceiros')->where('doc','=', $doc)->get();
        //...
    }
}