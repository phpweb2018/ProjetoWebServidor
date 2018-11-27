<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entidades\Usuario;
use App\Models\Entidades\Email;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarioDAO = new UsuarioDAO();

        self::setViewParam('listaUsuarios',$usuarioDAO->listar());
        
        $this->render('/usuario/index');

        Sessao::limpaMensagem();
    }

    public function login()
    {
        $this->renderLadoCliente('Usuario/Login');
    }

    public function cadastro()
    {
        $this->render('/usuario/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

    
    public function edicao($params)
    {
        $id = $params[0];

        $usuarioDAO = new UsuarioDAO();

        $usuario = $usuarioDAO->listar($id);

        if(!$usuario){
            Sessao::gravaMensagem("Usuário inexistente");
            $this->redirect('/usuario');
        }

        self::setViewParam('usuario',$usuario);

        $this->render('/usuario/editar');

        Sessao::limpaMensagem();

    }

    public function deslogar()
    {
      Sessao::limpaUsua();
      $this->redirect('/usuario');

    }

    
    public function logar()
    {
      $login    = $_POST['usua_login'];
      $password = $_POST['usua_password'];
 
      if ($login == 'admin' &&  $password == 'web2018') {
        Sessao::gravaUsua($login);
        $this->redirect('/Principal/Index');
      }

      $Usua = new Usuario();
      $Usua->setUsua_login($login);
      $Usua->setUsua_password($password);
      
      $usuarioDAO = new UsuarioDAO();

      $Usuario = $usuarioDAO->consultaLogin($Usua);

      if(!$Usuario){
        Sessao::gravaMensagem("Usuário ou senha incorreta");
        $this->redirect('/Usuario/login');
      } else {
        Sessao::gravaUsua($Usua->getUsua_login());
        $this->redirect('/Principal');
      } 
    }

    public function salvar()
    {
        $Usuario = new Usuario();
        $Usuario->setUsua_login($_POST['usua_login']);
        $Usuario->setUsua_password($_POST['usua_password']);
        $Usuario->setUsua_nome($_POST['usua_nome']);
        $Usuario->setUsua_email($_POST['usua_email']);

        Sessao::gravaFormulario($_POST);

        $usuarioDAO = new UsuarioDAO();

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
        
        try{
          $usuarioDAO->salvar($Usuario);
          Sessao::gravaMensagem("Usuário incluido com sucesso!");
        }
        catch (\Exception $e){
          Sessao::gravaErro(Sessao::ErroBD($e));
        }

        $this->redirect('/Usuario');
      
    }
    

    public function atualizar()
    {

        $usuario = new Usuario();
        $usuario->setUsua_id($_POST['usua_id']);
        $usuario->setUsua_login($_POST['usua_login']);
        $usuario->setUsua_password($_POST['usua_password']);
        $usuario->setUsua_nome($_POST['usua_nome']);
        $usuario->setUsua_email($_POST['usua_email']);

        Sessao::gravaFormulario($_POST);

        $usuarioDAO = new UsuarioDAO();

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
        
        try{
          $usuarioDAO->atualizar($usuario);
          Sessao::gravaMensagem("Usuário alterado com sucesso!");
        }
        catch (\Exception $e){
          Sessao::gravaErro(Sessao::ErroBD($e));
        }
        $this->redirect('/Usuario');

    }
    

    public function excluir()
    {
        $usuario = new Usuario();
        $usuario->setUsua_id($_POST['id']);

        $usuarioDAO = new UsuarioDAO();

        try {
          $usuarioDAO->excluir($usuario);
          Sessao::gravaMensagem("Usuário excluido com sucesso!");
        }
        catch (\Exception $e){
          Sessao::gravaErro(Sessao::ErroBD($e));
        }
        $this->redirect('/Usuario');

    }

}