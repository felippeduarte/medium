<?php

class Mail
{
    public function enviar($mensagem)
    {
        //logica de envio
    }
}

class MailMarketing
{
    public function enviar(Cliente $cliente)
    {
        $mensagem = $this->getConteudoEmailPorCliente($cliente);
        $mail = new Mail;
        $mail->enviar($mensagem);
    }

    private function getConteudoEmailPorCliente($cliente)
    {
        //logica de elaboração de conteúdo
    }
}

//refatorado
class MailMarketing
{
    protected $mail;

    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    public function enviar($mensagem)
    {
        $mensagem = $this->getConteudoEmailPorCliente($cliente);
        $this->mail->enviar($mensagem);
    }

    private function getConteudoEmailPorCliente($cliente)
    {
        //logica de elaboração de conteúdo
    }
}