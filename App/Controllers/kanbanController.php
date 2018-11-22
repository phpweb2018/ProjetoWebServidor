<?php

namespace App\Controllers;

use App\Models\Entidades\Ticket;
use App\Lib\Sessao;
use App\Models\DAO\ticketDAO;
use App\Models\Validacao\TicketValidador;

class KanbanController extends Controller
{
    public function index()
    {
        $ticketDAO = new ticketDAO();

        self::setViewParam('listaTickets-e',$ticketDAO->listar_situacao('Em Espera'));
        self::setViewParam('listaTickets-a',$ticketDAO->listar_situacao('Em Andamento'));
        self::setViewParam('listaTickets-f',$ticketDAO->listar_situacao('Finalizado'));
        
        $this->render('kanban/index');

        Sessao::limpaMensagem();
    }
    
    public function troca()
    {

      switch ($_POST['Situacao']) {
        case "TODO":
          $situ = 'Em Espera';
          break;
        case "DOING":
          $situ = 'Em Andamento';
          break;
        case "DONE":
          $situ = 'Finalizado';
          break;
      }

      $ticket = new Ticket();
      $ticket->setTick_id((int)$_POST['id']);
      $ticket->setTick_situacao($situ);

      $ticketDAO = new TicketDAO();

      try {
        $ticketDAO->alteraSituacao($ticket);
      }
      catch (\Exception $e){
        Sessao::gravaErro(Sessao::ErroBD($e));
        $this->redirect('/kanban');
      }
      
    }

    



}