<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\ticketDAO;
use App\Models\Entidades\Ticket;
use App\Models\Validacao\TicketValidador;

class TicketController extends Controller
{
    public function index()
    {
        $ticketDAO = new ticketDAO();

        self::setViewParam('listaTickets',$ticketDAO->listar());

        $this->render('/ticket/index');

        Sessao::limpaMensagem();
    }

    public function ticket()
    {
        $this->render('/ticket/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

    public function salvar()
    {
        $ticket = new ticket();
        $ticket->setTick_titulo($_POST['tick_titulo']);
        $ticket->setTick_cliente($_POST['tick_cliente']);
        $ticket->setTick_responsavel($_POST['tick_responsavel']);
        $ticket->setTick_situacao($_POST['tick_situacao']);
        $ticket->setTick_prioridade($_POST['tick_prioridade']);
        $ticket->setTick_criacao($_POST['tick_criacao']);
        $ticket->setTick_departamento($_POST['tick_departamento']);

        Sessao::gravaFormulario($_POST);

        $ticketValidador = new ticketValidador();
        $resultadoValidacao = $ticketValidador->validar($ticket);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/ticket/ticket');
        }

        $ticketDAO = new ticketDAO();

        $ticketDAO->salvar($ticket);
        
        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/ticket');
      
    }
    
    public function edicao($params)
    {
        $id = $params[0];

        $ticketDAO = new ticketDAO();

        $ticket = $ticketDAO->listar($id);

        if(!$ticket){
            Sessao::gravaMensagem("Produto inexistente");
            $this->redirect('/ticket');
        }

        self::setViewParam('ticket',$ticket);

        $this->render('/ticket/editar');

        Sessao::limpaMensagem();

    }

    public function atualizar()
    {

        $ticket = new ticket();
        $ticket->setTick_titulo($_POST['tick_titulo']);
        $ticket->setTick_cliente($_POST['tick_cliente']);
        $ticket->setTick_responsavel($_POST['tick_responsavel']);
        $ticket->setTick_situacao($_POST['tick_situacao']);
        $ticket->setTick_prioridade($_POST['tick_prioridade']);
        $ticket->setTick_criacao($_POST['tick_criacao']);
        $ticket->setTick_departamento($_POST['tick_departamento']);

        Sessao::gravaFormulario($_POST);

        $ticketValidador = new ticketValidador();
        $resultadoValidacao = $ticketValidador->validar($ticket);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/ticket/edicao/'.$_POST['id']);
        }

        $ticketDAO = new ticketDAO();

        $ticketDAO->atualizar($ticket);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/ticket');

    }
    
    public function exclusao($params)
    {
        $id = $params[0];

        $ticketDAO = new ticketDAO();

        $ticket = $ticketDAO->listar($id);

        if(!$ticket){
            Sessao::gravaMensagem("Produto inexistente");
            $this->redirect('/ticket');
        }

        self::setViewParam('ticket',$ticket);

        $this->render('/ticket/exclusao');

        Sessao::limpaMensagem();

    }

    public function excluir()
    {
        $ticket = new ticket();
        $ticket->setTick_ID($_POST['tick_ID']);

        $ticketDAO = new ticketDAO();

        if(!$ticketDAO->excluir($ticket)){
            Sessao::gravaMensagem("Produto inexistente");
            $this->redirect('/ticket');
        }

        Sessao::gravaMensagem("Produto excluido com sucesso!");

        $this->redirect('/ticket');

    }
}