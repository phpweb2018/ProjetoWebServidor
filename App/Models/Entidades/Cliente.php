<?php

namespace App\Models\Entidades;

use DateTime;

class Cliente
{
    private $clie_codi; 
    private $clie_nome; 
    private $clie_emai; 
    private $clie_nofa;   
    private $clie_tele; 
    private $clie_cnpj;
    private $clie_tipo;
    private $clie_situ; 
    private $clie_dtco; 
    private $clie_logr; 
    private $clie_nume; 
    private $clie_bair; 
    private $clie_copl; 
    private $clie_cida; 
    private $clie_esta;
    private $clie_obse; 

    public function getClie_codi()
    {
        return $this->clie_codi;
    }

    public function setClie_codi($clie_codi)
    {
        $this->clie_codi = $clie_codi;

        return $this;
    }

    public function getClie_nome()
    {
        return $this->clie_nome;
    }

    public function setClie_nome($clie_nome)
    {
        $this->clie_nome = $clie_nome;

        return $this;
    }

    public function getClie_emai()
    {
        return $this->clie_emai;
    }

    public function setClie_emai($clie_emai)
    {
        $this->clie_emai = $clie_emai;

        return $this;
    }

    public function getClie_nofa()
    {
        return $this->clie_nofa;
    }

    public function setClie_nofa($clie_nofa)
    {
        $this->clie_nofa = $clie_nofa;

        return $this;
    }

    public function getClie_tele()
    {
        return $this->clie_tele;
    }

    public function setClie_tele($clie_tele)
    {
        $this->clie_tele = $clie_tele;

        return $this;
    }

    public function getClie_cnpj()
    {
        return $this->clie_cnpj;
    }

    public function setClie_cnpj($clie_cnpj)
    {
        $this->clie_cnpj = $clie_cnpj;

        return $this;
    }

    public function getClie_tipo()
    {
        return $this->clie_tipo;
    }

    public function setClie_tipo($clie_tipo)
    {
        $this->clie_tipo = $clie_tipo;

        return $this;
    }

    public function getClie_situ()
    {
        return $this->clie_situ;
    }

    public function setClie_situ($clie_situ)
    {
        $this->clie_situ = $clie_situ;

        return $this;
    }

    public function getClie_dtco()
    {
        return $this->clie_dtco;
    }

    public function setClie_dtco($clie_dtco)
    {
        $this->clie_dtco = $clie_dtco;

        return $this;
    }

    public function getClie_logr()
    {
        return $this->clie_logr;
    }

    public function setClie_logr($clie_logr)
    {
        $this->clie_logr = $clie_logr;

        return $this;
    }

    public function getClie_nume()
    {
        return $this->clie_nume;
    }

    public function setClie_nume($clie_nume)
    {
        $this->clie_nume = $clie_nume;

        return $this;
    }

    public function getClie_bair()
    {
        return $this->clie_bair;
    }

    public function setClie_bair($clie_bair)
    {
        $this->clie_bair = $clie_bair;

        return $this;
    }

    public function getClie_copl()
    {
        return $this->clie_copl;
    }

    public function setClie_copl($clie_copl)
    {
        $this->clie_copl = $clie_copl;

        return $this;
    }

    public function getClie_cida()
    {
        return $this->clie_cida;
    }

    public function setClie_cida($clie_cida)
    {
        $this->clie_cida = $clie_cida;

        return $this;
    }

    public function getClie_esta()
    {
        return $this->clie_esta;
    }

    public function setClie_esta($clie_esta)
    {
        $this->clie_esta = $clie_esta;

        return $this;
    }

    public function getClie_obse()
    {
        return $this->clie_obse;
    }

    public function setClie_obse($clie_obse)
    {
        $this->clie_obse = $clie_obse;

        return $this;
    }
}


?>