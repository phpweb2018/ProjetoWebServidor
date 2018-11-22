<?php
namespace App;
use App\Lib\Sessao;

use App\Controllers\PrincipalController;
use Exception;

class App
{
    private $controller;
    private $controllerFile;
    private $action;
    private $params;
    public  $controllerName;

    public function __construct()
    {
        //define('APP_HOST'       , $_SERVER['HTTP_HOST'] . "/ProjetoWebServidor");
        define('APP_HOST'       , "https://phpweb2018.herokuapp.com");
        define('PATH'           , realpath('./'));
        define('TITLE'          , "Hass - Soluções");
        define('SSL_OR_NOT'     , "https://");

        // define('DB_HOST'        , "localhost:3307");
        // define('DB_USER'        , "root");
        // define('DB_PASSWORD'    , "");
        // define('DB_NAME'        , "php2018");
        // define('DB_DRIVER'      , "mysql");

        // define('DB_HOST'        , "localhost");
        // define('DB_USER'        , "postgres");
        // define('DB_PASSWORD'    , "postgres");
        // define('DB_NAME'        , "hasssolucoes");
        // define('DB_DRIVER'      , "pgsql");

        define('DB_HOST'        , "ec2-54-83-50-145.compute-1.amazonaws.com");
        define('DB_USER'        , "vasysywxnlwooi");
        define('DB_PASSWORD'    , "2919bf6469b71cab763a5e1990cad2de481927ecb7614c9577e899e811d774a6");
        define('DB_NAME'        , "d1j91br7qn9g5i");
        define('DB_DRIVER'      , "pgsql");        
      
        $this->url();
    }

    public function run()
    {
        $Sessao    = Sessao::class;
        if (!Sessao::retornaUsua() && $this->controller == 'Usuario') {
          $this->controllerName = "UsuarioController";
          $this->controller     = "Usuario";
        } elseif (!Sessao::retornaUsua()) {
          $this->controllerName = "SiteController";
          $this->controller     = "Site";//Caso não exista uma classe de controlador especifica será utilizada a classe Principal ou seja a DashBoard
        } elseif ($this->controller) {  //Verificar se está tentando acessar alguma classe especifica por meio do controlador
            $this->controllerName = ucwords($this->controller).'Controller';//Adiciona Controller no do atributo da casse controller em questão
            $this->controllerName = preg_replace('/[^a-zA-Z]/i', '', $this->controllerName);//Remove todos os caractéres exceto Letras Min. ou Mai.
        } else {
            $this->controllerName = "PrincipalController";//Caso não exista uma classe de controlador especifica será utilizada a classe Principal ou seja a DashBoard
        }

        $this->controllerFile   = $this->controllerName . '.php';//add .php para buscar o arquivo
        $this->action           = preg_replace('/[^a-zA-Z]/i', '', $this->action);//Já explicado anteriormente mas agora é para a ação que esta sendo tomada

        if (!$this->controller) {   // caso não tenha sido encontrada a Classe Será redirecionado para a principal Sempre.
            $this->controller = new PrincipalController($this);
            $this->controller->index(); //Chama o método para carregar a Classe e a página principal
        }

        if (!file_exists(PATH . '/App/Controllers/' . $this->controllerFile)) {
            throw new Exception("Página não encontrada.", 404);//Caso não exista o arquivo da classe controlador apresenta erro em tela
        }

        $nomeClasse     = "\\App\\Controllers\\" . $this->controllerName;  //Complementa a Classe para depois fazer a criação
      
        $objetoController = new $nomeClasse($this);

        if (!class_exists($nomeClasse)) { //Verifica se a Classe existe
          throw new Exception("Erro na aplicação", 500);
        }

        if ($this->controller == 'Site') {
          $objetoController->index($this->params);
          return;
        } elseif (!Sessao::retornaUsua() && $this->action != 'logar') {
            $objetoController->login($this->params);
            return;
        } elseif (method_exists($objetoController, $this->action)) {//Executa a ação do controlador
            $objetoController->{$this->action}($this->params);
            return;
        } else if (!$this->action && method_exists($objetoController,'index')) {
            $objetoController->index($this->params);
            return;
        } else {
            throw new Exception("Nosso suporte já esta verificando desculpe!", 500);
        }
        throw new Exception("Página não encontrada.", 404);
    }

    public function url () {

      if ( isset( $_GET['url'] ) ) {

          $path = $_GET['url'];
          $path = rtrim($path, '/');
          $path = filter_var($path, FILTER_SANITIZE_URL); 

          $path = explode('/', $path);

          $this->controller  = $this->verificaArray( $path, 0 );
          $this->action      = $this->verificaArray( $path, 1 );

          if ( $this->verificaArray( $path, 2 ) ) {
              unset( $path[0] );
              unset( $path[1] );
              $this->params = array_values( $path );
          }
      }
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getControllerName()
    {
        return $this->controllerName;
    }

    private function verificaArray ( $array, $key ) {
        if ( isset( $array[ $key ] ) && !empty( $array[ $key ] ) ) {
            return $array[ $key ];
        }
        return null;
    }
}
