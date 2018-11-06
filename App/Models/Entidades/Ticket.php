<?php

namespace App\Models\Tickets;

use DateTime;

class Ticket
{
    private $tick_ID;
    private $tick_titulo;
    private $tick_cliente;
    private $tick_responsavel;
    private $tick_situacao;
    private $tick_prioridade;
    private $tick_criacao;
    private $tick_departamento;

    public function getTick_titulo()
    {
        return $this->tick_titulo;
    }

    public function setTick_titulo($tick_titulo)
    {
        $this->tick_titulo = $tick_titulo;

        return $this;
    }

    public function getTick_cliente()
    {
        return $this->tick_cliente;
    }

    public function setTick_cliente($tick_cliente)
    {
        $this->tick_cliente = $tick_cliente;

        return $this;
    }

    public function getTick_responsavel()
    {
        return $this->tick_responsavel;
    }

    public function setTick_responsavel($tick_responsavel)
    {
        $this->tick_responsavel = $tick_responsavel;

        return $this;
    }
 
    public function getTick_situacao()
    {
        return $this->tick_situacao;
    }

    public function setTick_situacao($tick_situacao)
    {
        $this->tick_situacao = $tick_situacao;

        return $this;
    }

    public function getTick_prioridade()
    {
        return $this->tick_prioridade;
    }

    public function setTick_prioridade($tick_prioridade)
    {
        $this->tick_prioridade = $tick_prioridade;

        return $this;
    }

    public function getTick_criacao()
    {
        return $this->tick_criacao;
    }

    public function setTick_criacao($tick_criacao)
    {
        $this->tick_criacao = $tick_criacao;

        return $this;
    }

    public function getTick_departamento()
    {
        return $this->tick_departamento;
    }

    public function setTick_departamento($tick_departamento)
    {
        $this->tick_departamento = $tick_departamento;

        return $this;
    }

    public function getTick_ID()
    {
        return $this->tick_ID;
    }

    public function setTick_ID($tick_ID)
    {
        $this->tick_ID = $tick_ID;

        return $this;
    }
}


?>