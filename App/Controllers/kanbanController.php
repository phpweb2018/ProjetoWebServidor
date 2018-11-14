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

        self::setViewParam('listaTickets',$ticketDAO->listar());
        
        $this->render('kanban/index');

        Sessao::limpaMensagem();
    }
}