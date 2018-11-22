<?php

namespace App\Lib;
use PDOException;
class Sessao
{
    public static function gravaMensagem($mensagem){
        $_SESSION['mensagem'] = $mensagem;
    }

    public static function limpaMensagem(){
        unset($_SESSION['mensagem']);
    }

    public static function retornaMensagem(){
        return (isset($_SESSION['mensagem'])) ? $_SESSION['mensagem'] : "";
    }

    public static function gravaFormulario($form){
        $_SESSION['form'] = $form;
    }

    public static function limpaFormulario(){
        unset($_SESSION['form']);
    }

    public static function retornaValorFormulario($key){
        return (isset($_SESSION['form'][$key])) ? $_SESSION['form'][$key] : "";
    }

    public static function existeFormulario(){
        return (isset($_SESSION['form'])) ? $_SESSION['form'] : "";
    }

    public static function gravaErro($erros){
        $_SESSION['erro'] = $erros;
    }

    public static function retornaErro(){
       return (isset($_SESSION['erro'])) ? $_SESSION['erro'] : false;
    }

    public static function limpaErro(){
        unset($_SESSION['erro']);
    }

    public static function gravaUsua($Usua){
        $_SESSION['usua'] = $Usua;
    }

    public static function retornaUsua(){
      return (isset($_SESSION['usua'])) ? $_SESSION['usua'] : false;
    }

    public static function limpaUsua(){
        unset($_SESSION['usua']);
    }

    public static function ErroBD(\Exception $e) {
      if($e->getCode() == "23503") { //restrição de chave
        return $e->errorInfo[2];    
      } else {
        return 'Erro de Banco de Dados'.$e->getMessage();  
      }

    }

}