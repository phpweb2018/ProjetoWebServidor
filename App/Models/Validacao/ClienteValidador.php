<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Cliente;

class ClienteValidador{

    public function validar(Cliente $Cliente)
    {
        $resultadoValidacao = new ResultadoValidacao();

       		  
		if(empty($Cliente->getClie_nome()))
    {
        $resultadoValidacao->addErro('clie_nome',"Nome: Este campo não pode ser vazio");
    }
    	  
    if(empty($Cliente->getClie_tipo()))
    {
        $resultadoValidacao->addErro('clie_tipo',"Tipo: Este campo não pode ser vazio");
    }
    
    if(empty($Cliente->getClie_situ()))
    {
        $resultadoValidacao->addErro('clie_situ',"Situação: Este campo não pode ser vazio");
    }

    if(empty($Cliente->getClie_dtco()))
    {
        $resultadoValidacao->addErro('clie_dtco',"Data do Contrato: Este campo não pode ser vazio");
    }

    if(empty($Cliente->getClie_logr()))
    {
        $resultadoValidacao->addErro('clie_logr',"Logradouro: Este campo não pode ser vazio");
    }
	  
    if(empty($Cliente->getClie_bair()))
    {
        $resultadoValidacao->addErro('clie_bair',"Bairro: Este campo não pode ser vazio");
    }
    
    if(empty($Cliente->getClie_cida()))
    {
        $resultadoValidacao->addErro('clie_cida',"Cidade: Este campo não pode ser vazio");
    }

    if(empty($Cliente->getClie_esta()))
    {
        $resultadoValidacao->addErro('clie_esta',"UF-Estado: Este campo não pode ser vazio");
    }


        return $resultadoValidacao;
    }
}