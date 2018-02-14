<?php
//include Google API
//include Facebook API
//include Twitter API

class Autenticacao
{
    public function login($cliente, $provedor)
    {
        if($provedor == 'Google') {
            return $this->loginGoogle($cliente);
        } elseif($provedor == 'Facebook') {
            return $this->loginFacebook($cliente);
        } elseif($provedor == 'Twitter') {
            return $this->loginTwitter($cliente);
        } else {
            return $this->loginSistema($cliente);
        }
    }
    public function loginSistema($cliente)
    {
        //compara email no banco, hash da senha
        //caso positivo seta alguns valores na sessão
        //ao final retorna true ou false
    }

    public function loginGoogle($cliente)
    {
        //realiza login pela API do google
        //caso sucesso, coloca valores na sessão
        //ao final retorna true ou false
    }

    public function loginFacebook($cliente)
    {
        //realiza login pela API do facebook
        //caso sucesso, coloca valores na sessão
        //ao final retorna true ou false
    }

    public function loginTwitter($cliente)
    {
        //realiza login pela API do twitter
        //caso sucesso, coloca valores na sessão
        //ao final retorna true ou false
    }
}