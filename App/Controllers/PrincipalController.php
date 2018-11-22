<?php

namespace App\Controllers;

use App\Models\Entidades\Ticket;

use App\Lib\Sessao;

use App\Models\DAO\ticketDAO;

class PrincipalController extends Controller
{
    public function index()
    {
        
      $ticketDAO = new ticketDAO();

      self::setViewParam('chartTickets',$ticketDAO->chartTickets());
      
      $this->render('Principal/index');
    }
}