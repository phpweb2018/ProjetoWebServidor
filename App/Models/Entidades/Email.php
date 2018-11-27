<?php

namespace App\Models\Entidades;

use DateTime;

class Email
{
    private $email_remetente;
    private $remetente;
    private $assunto;
    private $email_destino;
    private $destinatario;
    private $titulo;
    private $conteudo;
     

    public function getEmail_remetente()
    {
        return $this->email_remetente;
    }

    public function setEmail_remetente($email_remetente)
    {
        $this->email_remetente = $email_remetente;

        return $this;
    }

    public function getRemetente()
    {
        return $this->remetente;
    }

    public function setRemetente($remetente)
    {
        $this->remetente = $remetente;

        return $this;
    }

    public function getAssunto()
    {
        return $this->assunto;
    }

    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    public function getEmail_destino()
    {
        return $this->email_destino;
    }

    public function setEmail_destino($email_destino)
    {
        $this->email_destino = $email_destino;

        return $this;
    }

    public function getDestinatario()
    {
        return $this->destinatario;
    }

    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getConteudo()
    {
        return $this->conteudo;
    }

    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }
}


?>