<?php
class Autenticacao
{
    public function login($cliente)
    {
        //compara email no banco, hash da senha
        //caso positivo seta alguns valores na sessão
        //ao final retorna true ou false
    }
}

//include Google API
class AutenticacaoGoogle extends Autenticacao
{
    public function login($cliente)
    {
        //realiza login pela API do google
        //caso sucesso, coloca valores na sessão
        //ao final retorna true ou false
    }
}

//include Facebook API
class AutenticacaoFacebook
{
    public function login($cliente)
    {
        //realiza login pela API do facebook
        //caso sucesso, coloca valores na sessão
        //ao final retorna true ou false
    }
}

//include Twitter API
class AutenticacaoTwitter
{
    public function login($cliente)
    {
        //realiza login pela API do twitter
        //caso sucesso, coloca valores na sessão
        //ao final retorna true ou false
    }
}