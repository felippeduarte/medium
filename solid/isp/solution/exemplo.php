<?php

interface Funcionario
{
    public function getCargo();
    public function calculaSalario();
}

interface FuncionarioCeletista extends Funcionario
{
    public function calcula13o();
}

interface FuncionarioEstagiario extends Funcionario
{
    public function setInstituicaoEnsino();
}

class Gerente implements FuncionarioCeletista
{
    public function getCargo()
    {
        return "Gerente";
    }

    public function calculaSalario()
    {
        //logica para calculo salário
    }

    public function calcula13o()
    {
        //logica para calculo do 13
    }
}

class Programador implements FuncionarioCeletista
{
    public function getCargo()
    {
        return "Programador";
    }

    public function calculaSalario()
    {
        //logica para calculo salário
    }

    public function calcula13o()
    {
        //logica para calculo do 13
    }
}

class Estagiario implements FuncionarioEstagiario
{
    public function getCargo()
    {
        return "Estagiário";
    }

    public function calculaSalario()
    {
        //logica para calculo salário (bolsa)
    }

    public function setInstituicaoEnsino()
    {
        //logica para definir instituição de ensino do estagiário
    }
}