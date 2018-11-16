<?php

namespace App\Models\DAO;

use App\Models\Entidades\Ticket;

class TicketDAO extends BaseDAO
{
    public  function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM Tick WHERE tick_ID = $id"
            );

            return $resultado->fetchObject(Ticket::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM tick'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Ticket::class);
        }

        return false;
    }

    public  function listarIndex()
    {
      $resultado = $this->select(
          'SELECT tick_ID, tick_titulo, clie_nome as tick_cliente, tick_responsavel, tick_situacao FROM Tick 
           LEFT JOIN clie ON tick_cliente = clie_codi'
      );
      return $resultado->fetchAll(\PDO::FETCH_CLASS, Ticket::class);
    }

    public  function listar_situacao($situ)
    {
            $resultado = $this->select(
                "SELECT tick_titulo,tick_criacao,tick_descricao FROM Tick WHERE tick_situacao = '${situ}'"
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Ticket::class);
    }
    public  function salvar(Ticket $Ticket) 
    {
      $tick_titulo           = $Ticket->getTick_titulo();
      $tick_cliente          = (int)$Ticket->getTick_cliente();
      $tick_responsavel      = $Ticket->getTick_responsavel();
      $tick_situacao         = $Ticket->getTick_situacao();
      $tick_descricao        = $Ticket->getTick_descricao();
      $tick_prioridade       = (int)$Ticket->getTick_prioridade();
      $tick_criacao          = $Ticket->getTick_criacao();
      $tick_departamento     = $Ticket->getTick_departamento();
      $tick_criacao = implode("-", array_reverse(explode("/", trim($tick_criacao))));

      return $this->insert(
          'tick',
          ":tick_titulo,
          :tick_cliente,
          :tick_responsavel,
          :tick_situacao,
          :tick_descricao,
          :tick_prioridade,
          :tick_criacao,
          :tick_departamento",
          [
              ':tick_titulo'=>$tick_titulo,
              ':tick_cliente'=>$tick_cliente,
              ':tick_responsavel'=>$tick_responsavel,
              ':tick_situacao'=>$tick_situacao,
              ':tick_descricao'=>$tick_descricao,
              ':tick_prioridade'=>$tick_prioridade,
              ':tick_criacao'=>$tick_criacao,
              ':tick_departamento'=>$tick_departamento
          ]
      );
    }

    public  function atualizar(Ticket $Ticket) 
    {
      $tick_ID               = $Ticket->getTick_ID();
      $tick_titulo           = $Ticket->getTick_titulo();
      $tick_cliente          = $Ticket->getTick_cliente();
      $tick_responsavel      = $Ticket->getTick_responsavel();
      $tick_situacao         = $Ticket->getTick_situacao();
      $tick_descricao        = $Ticket->getTick_descricao();
      $tick_prioridade       = $Ticket->getTick_prioridade();
      $tick_criacao          = $Ticket->getTick_criacao();
      $tick_departamento     = $Ticket->getTick_departamento();

      return $this->update(
          'Ticket',
          "tick_ID = :tick_ID, tick_titulo = :tick_titulo, tick_cliente = :tick_cliente, 
          tick_responsavel = :tick_responsavel, tick_situacao = :tick_situacao, tick_descricao = :tick_descricao, 
          tick_prioridade = :tick_prioridade,
          tick_criacao = :tick_criacao, tick_departamento = :tick_departamento",
          [
              ':tick_ID'=>$tick_ID,
              ':tick_titulo'=>$tick_titulo,
              ':tick_cliente'=>$tick_cliente,
              ':tick_responsavel'=>$tick_responsavel,
              ':tick_situacao'=>$tick_situacao,
              ':tick_descricao'=>$tick_descricao,
              ':tick_prioridade'=>$tick_prioridade,
              ':tick_criacao'=>$tick_criacao,
              ':tick_departamento'=>$tick_departamento
          ],
          "tick_ID = :tick_ID"
      );

    }

    public function excluir(Ticket $Ticket)
    {
        
      $id = $Ticket->getTick_ID();

      return $this->delete('tick',"tick_ID = $id");

    }
}