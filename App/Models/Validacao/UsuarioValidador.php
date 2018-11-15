<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Usuario;

class UsuarioValidador{

    public function validar(Usuario $Usuario)
    {
        $resultadoValidacao = new ResultadoValidacao();
   		  
	if(empty($Usuario->getUser_login()))
    {
        $resultadoValidacao->addErro('user_nome',"Login: Este campo não pode ser vazio");
    }
    	  
    if(empty($Usuario->getUser_password()))
    {
        $resultadoValidacao->addErro('user_password',"Senha: Este campo não pode ser vazio");
    }
    
    if(empty($Usuario->getUser_nome()))
    {
        $resultadoValidacao->addErro('user_nome',"Nome: Este campo não pode ser vazio");
    }

    if(empty($Usuario->getUser_email()))
    {
        $resultadoValidacao->addErro('user_email',"E-mail: Este campo não pode ser vazio");
    }
        return $resultadoValidacao;
    }
}