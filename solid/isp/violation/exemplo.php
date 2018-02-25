<?php

interface Funcionario
{
    public function getCargo();
    public function calculaSalario();
    public function calcula13o();
}

class Gerente implements Funcionario
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

class Programador implements Funcionario
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

class Estagiario implements Funcionario
{
    public function getCargo()
    {
        return "Estagiário";
    }

    public function calculaSalario()
    {
        //logica para calculo salário
    }

    public function calcula13o()
    {
        throw new Exception("Estagiário não pode receber 13o");
    }
}