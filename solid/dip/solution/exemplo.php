<?php

interface iMail
{
    public function enviar($mensagem);
}

class MailSMTP implements iMail
{
    public function enviar($mensagem)
    {
        //logica de envio
    }
}

class MailAmazon implements iMail
{
    public function enviar($mensagem)
    {
        //logica de envio
    }
}

class MailChimp implements iMail
{
    public function enviar($mensagem)
    {
        //logica de envio
    }
}

class MailMarketing
{
    protected $mail;

    public function __construct(iMail $mail)
    {
        $this->mail = $mail;
    }

    public function enviar(Cliente $cliente)
    {
        $mensagem = $this->getConteudoEmailPorCliente($cliente);
        $this->mail->enviar($mensagem);
    }

    private function getConteudoEmailPorCliente($cliente)
    {
        //logica de elaboração de conteúdo
    }
}