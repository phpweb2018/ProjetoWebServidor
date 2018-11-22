<?php

namespace App\Controllers;

use App\Lib\Sessao;

abstract class Controller
{
    protected $app;
    private $viewVar;
    private $rota;

    public function __construct($app)
    {
        $this->setViewParam('nameController',$app->getControllerName());
        $this->setViewParam('nameAction',$app->getAction());
    }

    public function render($view)
    {
        $viewVar   = $this->getViewVar();
        $Sessao    = Sessao::class;

        $rota      = explode('/', (substr($view,0,1) == '/')?substr($view,1):$view);

        if (($rotIndex = array_search('index', $rota)) !== false) {
            unset($rota[$rotIndex]);
        }

        require_once PATH . '/App/Views/layouts/cabecalho.php';
        require_once PATH . '/App/Views/layouts/sidebar.php';
        require_once PATH . '/App/Views/'.$view.'.php';
        require_once PATH . '/App/Views/layouts/modal.php';
        require_once PATH . '/App/Views/layouts/rodape.php';
    }

    public function renderLadoCliente($view)
    {
        $viewVar   = $this->getViewVar();
        $Sessao    = Sessao::class;

        require_once PATH . '/App/Views/'.$view.'.php';
    }
    
    public function redirect($view)
    {
        header('Location: http://' . APP_HOST . $view);
        exit;
    }

    public function getViewVar()
    {
        return $this->viewVar;
    }

    public function setViewParam($varName, $varValue)
    {
        if ($varName != "" && $varValue != "") {
            $this->viewVar[$varName] = $varValue;
        }
    }
}