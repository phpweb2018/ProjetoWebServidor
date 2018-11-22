<?php

namespace App\Models\Entidades;

use DateTime;

class Usuario
{
    private $usua_id;
    private $usua_login;
    private $usua_password;
    private $usua_nome;
    private $usua_email;

    public function getUsua_id()
    {
        return $this->usua_id;
    }

    public function setUsua_id($usua_id)
    {
        $this->usua_id = $usua_id;

        return $this;
    }

    public function getUsua_login()
    {
        return $this->usua_login;
    }

    public function setUsua_login($usua_login)
    {
        $this->usua_login = $usua_login;

        return $this;
    }

    public function getUsua_password()
    {
        return $this->usua_password;
    }

    public function setUsua_password($usua_password)
    {
        $this->usua_password = $usua_password;

        return $this;
    }

    public function getUsua_nome()
    {
        return $this->usua_nome;
    }

    public function setUsua_nome($usua_nome)
    {
        $this->usua_nome = $usua_nome;

        return $this;
    }

    public function getUsua_email()
    {
        return $this->usua_email;
    }

    public function setUsua_email($usua_email)
    {
        $this->usua_email = $usua_email;

        return $this;
    }
}