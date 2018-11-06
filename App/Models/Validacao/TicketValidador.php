<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Ticket;

class TicketValidador{

    public function validar(Ticket $ticket)
    {
        $resultadoValidacao = new ResultadoValidacao();

        if(empty($ticket->getTick_titulo()))
        {
            $resultadoValidacao->addErro('nome',"Nome: Este campo não pode ser vazio");
        }
        
        if(empty($ticket->getTick_cliente()))
        {
            $resultadoValidacao->addErro('preco',"Preço: Este campo não pode ser vazio");
        }

        if(empty($ticket->getTick_responsavel()))
        {
            $resultadoValidacao->addErro('quantidade',"Quantidade: Este campo não pode ser vazio");
        }

        if(empty($ticket->getTick_situacao()))
        {
            $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
        }

        if(empty($ticket->getTick_prioridade()))
        {
            $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
        }

        if(empty($ticket->getTick_criacao()))
        {
            $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
        }

        if(empty($ticket->getTick_departamento()))
        {
            $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
        }

        return $resultadoValidacao;
    }
}