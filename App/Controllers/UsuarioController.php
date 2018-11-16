<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entidades\Usuario;
use App\Models\Validacao\UsuarioValidador;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarioDAO = new UsuarioDAO();

        self::setViewParam('listaUsuarios',$usuarioDAO->listar());
        
        $this->render('/usuario/index');

        Sessao::limpaMensagem();
    }

    public function cadastro()
    {
        $this->render('/usuario/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

    public function salvar()
    {
        $Usuario = new Usuario();
        $Usuario->setUser_login($_POST['user_login']);
        $Usuario->setUser_password($_POST['user_password']);
        $Usuario->setUser_nome($_POST['user_nome']);
        $Usuario->setUser_email($_POST['user_email']);

        Sessao::gravaFormulario($_POST);

        $usuarioValidador = new UsuarioValidador();
        $resultadoValidacao = $usuarioValidador->validar($Usuario);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/Usuario');
        }

        $usuarioDAO = new UsuarioDAO();

        $usuarioDAO->salvar($Usuario);
        
        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/Usuario');
      
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

    public function atualizar()
    {

        $usuario = new Usuario();
        $usuario->setUser_id($_POST['user_id']);
        $usuario->setUser_login($_POST['user_login']);
        $usuario->setUser_password($_POST['user_password']);
        $usuario->setUser_nome($_POST['user_nome']);
        $usuario->setUser_email($_POST['user_email']);

        Sessao::gravaFormulario($_POST);

        $usuarioValidador = new UsuarioValidador();
        $resultadoValidacao = $usuarioValidador->validar($usuario);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/usuario/edicao/'.$_POST['user_id']);
        }

        $usuarioDAO = new UsuarioDAO();

        $usuarioDAO->atualizar($usuario);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/usuario');

    }
    

    public function excluir()
    {
        $usuario = new Usuario();
        $usuario->setUser_id($_POST['id']);

        $usuarioDAO = new UsuarioDAO();

        try {
            $usuarioDAO->excluir($usuario);
            Sessao::gravaMensagem("Usuário excluido com sucesso!");
          }
          catch (\Exception $e){
            Sessao::gravaErro(Sessao::ErroBD($e));
          }
        $this->redirect('/usuario');

    }

}