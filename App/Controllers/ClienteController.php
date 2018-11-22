<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\ClienteDAO;
use App\Models\Entidades\Cliente;
use App\Models\Validacao\ClienteValidador;

class ClienteController extends Controller
{
    public function index()
    {
        $clienteDAO = new ClienteDAO();

        self::setViewParam('listaClientes',$clienteDAO->listar());
        
        $this->render('/cliente/index');

        Sessao::limpaMensagem();
    }

    public function cadastro()
    {
        $this->render('/cliente/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

    public function salvar()
    {
        $Cliente = new Cliente();
        $Cliente->setClie_nome($_POST['clie_nome']);
        $Cliente->setClie_emai($_POST['clie_emai']);
        $Cliente->setClie_nofa($_POST['clie_nofa']);
        $Cliente->setClie_tele($_POST['clie_tele']);
        $Cliente->setClie_cnpj($_POST['clie_cnpj']);
        $Cliente->setClie_tipo($_POST['clie_tipo']);
        $Cliente->setClie_situ($_POST['clie_situ']);
        $Cliente->setClie_dtco($_POST['clie_dtco']);
        $Cliente->setClie_logr($_POST['clie_logr']);
        $Cliente->setClie_nume($_POST['clie_nume']);
        $Cliente->setClie_bair($_POST['clie_bair']);
        $Cliente->setClie_copl($_POST['clie_copl']);
        $Cliente->setClie_cida($_POST['clie_cida']);
        $Cliente->setClie_esta($_POST['clie_esta']);
        $Cliente->setClie_obse($_POST['clie_obse']);

        Sessao::gravaFormulario($_POST);

        $clienteValidador = new ClienteValidador();
        $resultadoValidacao = $clienteValidador->validar($Cliente);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/cliente/cliente');
        }

        $clienteDAO = new ClienteDAO();

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        try{
          $clienteDAO->salvar($Cliente);
          Sessao::gravaMensagem("Cliente incluído com sucesso!");
        }
        catch (\Exception $e){
          Sessao::gravaErro(Sessao::ErroBD($e));
        }

        $this->redirect('/Cliente');
      
    }
    
    public function edicao($params)
    {
        $id = $params[0];

        $clienteDAO = new ClienteDAO();

        $cliente = $clienteDAO->listar($id);

        if(!$cliente){
            Sessao::gravaMensagem("Cliente inexistente");
            $this->redirect('/cliente');
        }

        self::setViewParam('cliente',$cliente);

        $this->render('/cliente/editar');

        Sessao::limpaMensagem();

    }

    public function atualizar()
    {

        $cliente = new Cliente();
        $cliente->setClie_codi($_POST['clie_codi']);
        $cliente->setClie_nome($_POST['clie_nome']);
        $cliente->setClie_emai($_POST['clie_emai']);
        $cliente->setClie_nofa($_POST['clie_nofa']);
        $cliente->setClie_tele($_POST['clie_tele']);
        $cliente->setClie_cnpj($_POST['clie_cnpj']);
        $cliente->setClie_tipo($_POST['clie_tipo']);
        $cliente->setClie_situ($_POST['clie_situ']);
        $cliente->setClie_dtco($_POST['clie_dtco']);
        $cliente->setClie_logr($_POST['clie_logr']);
        $cliente->setClie_nume($_POST['clie_nume']);
        $cliente->setClie_bair($_POST['clie_bair']);
        $cliente->setClie_copl($_POST['clie_copl']);
        $cliente->setClie_cida($_POST['clie_cida']);
        $cliente->setClie_esta($_POST['clie_esta']);
        $cliente->setClie_obse(trim($_POST['clie_obse']));

        Sessao::gravaFormulario($_POST);

        $clienteValidador = new ClienteValidador();
        $resultadoValidacao = $clienteValidador->validar($cliente);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/cliente/edicao/'.$_POST['clie_codi']);
        }

        $clienteDAO = new ClienteDAO();
        
        Sessao::limpaFormulario();
        Sessao::limpaMensagem();

        try {
          $clienteDAO->atualizar($cliente);
          Sessao::gravaMensagem("Cliente alterado com sucesso!");
        }
        catch (\Exception $e){
          Sessao::gravaErro(Sessao::ErroBD($e));
        }

        $this->redirect('/cliente');

    }
    
    public function excluir()
    {
        $cliente = new Cliente();
        $cliente->setClie_codi($_POST['id']);

        $clienteDAO = new ClienteDAO();

        try {
          $clienteDAO->excluir($cliente);
          Sessao::gravaMensagem("Cliente excluido com sucesso!");
        }
        catch (\Exception $e){
          Sessao::gravaErro(Sessao::ErroBD($e));
        }
        
        $this->redirect('/cliente');
    }

}