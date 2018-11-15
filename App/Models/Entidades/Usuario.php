<?php

namespace App\Models\Entidades;

use DateTime;

class Usuario
{
    private $user_id;
    private $user_login;
    private $user_password;
    private $user_nome;
    private $user_email;

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getUser_login()
    {
        return $this->user_login;
    }

    public function setUser_login($user_login)
    {
        $this->user_login = $user_login;

        return $this;
    }

    public function getUser_password()
    {
        return $this->user_password;
    }

    public function setUser_password($user_password)
    {
        $this->user_password = $user_password;

        return $this;
    }

    public function getUser_nome()
    {
        return $this->user_nome;
    }

    public function setUser_nome($user_nome)
    {
        $this->user_nome = $user_nome;

        return $this;
    }

    public function getUser_email()
    {
        return $this->user_email;
    }

    public function setUser_email($user_email)
    {
        $this->user_email = $user_email;

        return $this;
    }
}