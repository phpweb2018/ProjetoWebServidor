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
        $resultadoValidacao->addErro('nome',"Nome: Este campo não pode ser vazio");
    }
    
    if(empty($produto->getClie_emai()))
    {
        $resultadoValidacao->addErro('preco',"Preço: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_nofa()))
    {
        $resultadoValidacao->addErro('quantidade',"Quantidade: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_tele()))
    {
        $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_cnpj()))
    {
        $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
    }		  
    if(empty($produto->getClie_tipo()))
    {
        $resultadoValidacao->addErro('nome',"Nome: Este campo não pode ser vazio");
    }
    
    if(empty($produto->getClie_situ()))
    {
        $resultadoValidacao->addErro('preco',"Preço: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_dtco()))
    {
        $resultadoValidacao->addErro('quantidade',"Quantidade: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_logr()))
    {
        $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_nume()))
    {
        $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
    }		  
    if(empty($produto->getClie_bair()))
    {
        $resultadoValidacao->addErro('nome',"Nome: Este campo não pode ser vazio");
    }
    
    if(empty($produto->getClie_copl()))
    {
        $resultadoValidacao->addErro('preco',"Preço: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_cida()))
    {
        $resultadoValidacao->addErro('quantidade',"Quantidade: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_esta()))
    {
        $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
    }

    if(empty($produto->getClie_obse()))
    {
        $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
    }

        return $resultadoValidacao;
    }
}