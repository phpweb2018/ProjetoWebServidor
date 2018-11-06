<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Produto;

class ProdutoValidador{

    public function validar(Produto $produto)
    {
        $resultadoValidacao = new ResultadoValidacao();

       		  
		if(empty($produto->getClie_nome()))
    {
        $resultadoValidacao->addErro('clie_nome',"Nome: Este campo não pode ser vazio");
    }
    
    if(empty($produto->getClie_emai()))
    {
        $resultadoValidacao->addErro('clie_emai',"Email: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_nofa()))
    {
        $resultadoValidacao->addErro('clie_nofa',"Nome Fantasia: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_tele()))
    {
        $resultadoValidacao->addErro('clie_tele',"Telefone: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_cnpj()))
    {
        $resultadoValidacao->addErro('clie_cnpj',"CNPJ: Este campo não pode ser vazio");
    }		  
    if(empty($produto->getClie_tipo()))
    {
        $resultadoValidacao->addErro('clie_tipo',"Tipo: Este campo não pode ser vazio");
    }
    
    if(empty($produto->getClie_situ()))
    {
        $resultadoValidacao->addErro('clie_situ',"Situação: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_dtco()))
    {
        $resultadoValidacao->addErro('clie_dtco',"Data do Contrato: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_logr()))
    {
        $resultadoValidacao->addErro('clie_logr',"Logradouro: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_nume()))
    {
        $resultadoValidacao->addErro('clie_nume',"Numero: Este campo não pode ser vazio");
    }		  
    if(empty($produto->getClie_bair()))
    {
        $resultadoValidacao->addErro('clie_bair',"Bairro: Este campo não pode ser vazio");
    }
    
    if(empty($produto->getClie_copl()))
    {
        $resultadoValidacao->addErro('clie_copl',"Complemento: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_cida()))
    {
        $resultadoValidacao->addErro('clie_cida',"Cidade: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_esta()))
    {
        $resultadoValidacao->addErro('clie_esta',"UF-Estado: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_obse()))
    {
        $resultadoValidacao->addErro('clie_obse',"Observações: Este campo não pode ser vazio");
    }

        return $resultadoValidacao;
    }
}