<?php

namespace App\Models\DAO;

use App\Models\Entidades\Cliente;

class ClienteDAO extends BaseDAO
{
    public function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM Cliente WHERE clie_codi = $id"
            );

            return $resultado->fetchObject(Cliente::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM Cliente'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Cliente::class);
        }

        return false;
    }

    public  function salvar(Cliente $Cliente) 
    {
        try {
          
          $Clie_nome  =      getClie_nome();
          $Clie_emai  =      getClie_emai();
          $Clie_nofa  =      getClie_nofa();
          $Clie_tele  =      getClie_tele();
          $Clie_cnpj  =      getClie_cnpj();
          $Clie_tipo  =      getClie_tipo();
          $Clie_situ  =      getClie_situ();
          $Clie_dtco  =      getClie_dtco();
          $Clie_logr  =      getClie_logr();
          $Clie_nume  =      getClie_nume();
          $Clie_bair  =      getClie_bair();
          $Clie_copl  =      getClie_copl();
          $Clie_cida  =      getClie_cida();
          $Clie_esta  =      getClie_esta();
          $Clie_obse  =      getClie_obse();

          return $this->insert(
              'Cliente',
              " :Clie_nome,
                :Clie_emai,
                :Clie_nofa,
                :Clie_tele,
                :Clie_cnpj,
                :Clie_tipo,
                :Clie_situ,
                :Clie_dtco,
                :Clie_logr,
                :Clie_nume,
                :Clie_bair,
                :Clie_copl,
                :Clie_cida,
                :Clie_esta,
                :Clie_obse",
              [
                ':Clie_nome'=>$Clie_nome,
                ':Clie_emai'=>$Clie_emai,
                ':Clie_nofa'=>$Clie_nofa,
                ':Clie_tele'=>$Clie_tele,
                ':Clie_cnpj'=>$Clie_cnpj,
                ':Clie_tipo'=>$Clie_tipo,
                ':Clie_situ'=>$Clie_situ,
                ':Clie_dtco'=>$Clie_dtco,
                ':Clie_logr'=>$Clie_logr,
                ':Clie_nume'=>$Clie_nume,
                ':Clie_bair'=>$Clie_bair,
                ':Clie_copl'=>$Clie_copl,
                ':Clie_cida'=>$Clie_cida,
                ':Clie_esta'=>$Clie_esta,
                ':Clie_obse'=>$Clie_obse
              ]
          );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(Cliente $Cliente) 
    {
        try {

          $Clie_codi  =  getClie_codi();
          $Clie_nome  =  getClie_nome();
          $Clie_emai  =  getClie_emai();
          $Clie_nofa  =  getClie_nofa();
          $Clie_tele  =  getClie_tele();
          $Clie_cnpj  =  getClie_cnpj();
          $Clie_tipo  =  getClie_tipo();
          $Clie_situ  =  getClie_situ();
          $Clie_dtco  =  getClie_dtco();
          $Clie_logr  =  getClie_logr();
          $Clie_nume  =  getClie_nume();
          $Clie_bair  =  getClie_bair();
          $Clie_copl  =  getClie_copl();
          $Clie_cida  =  getClie_cida();
          $Clie_esta  =  getClie_esta();
          $Clie_obse  =  getClie_obse();

            return $this->update(
                'Cliente',
                "Clie_nome  =  :Clie_nome,
                 Clie_emai  =  :Clie_emai,
                 Clie_nofa  =  :Clie_nofa,
                 Clie_tele  =  :Clie_tele,
                 Clie_cnpj  =  :Clie_cnpj,
                 Clie_tipo  =  :Clie_tipo,
                 Clie_situ  =  :Clie_situ,
                 Clie_dtco  =  :Clie_dtco,
                 Clie_logr  =  :Clie_logr,
                 Clie_nume  =  :Clie_nume,
                 Clie_bair  =  :Clie_bair,
                 Clie_copl  =  :Clie_copl,
                 Clie_cida  =  :Clie_cida,
                 Clie_esta  =  :Clie_esta,
                 Clie_obse  =  :Clie_obse",
                [
                 ':Clie_codi'=>$Clie_codi,
                 ':Clie_nome'=>$Clie_nome,
                 ':Clie_emai'=>$Clie_emai,
                 ':Clie_nofa'=>$Clie_nofa,
                 ':Clie_tele'=>$Clie_tele,
                 ':Clie_cnpj'=>$Clie_cnpj,
                 ':Clie_tipo'=>$Clie_tipo,
                 ':Clie_situ'=>$Clie_situ,
                 ':Clie_dtco'=>$Clie_dtco,
                 ':Clie_logr'=>$Clie_logr,
                 ':Clie_nume'=>$Clie_nume,
                 ':Clie_bair'=>$Clie_bair,
                 ':Clie_copl'=>$Clie_copl,
                 ':Clie_cida'=>$Clie_cida,
                 ':Clie_esta'=>$Clie_esta,
                 ':Clie_obse'=>$Clie_obse  
                ],
                "Clie_codi = :Clie_codi"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Cliente $Cliente)
    {
        try {
            $id = $Cliente->getId();

            return $this->delete('Cliente',"Clie_codi = $Clie_codi");

        }catch (Exception $e){

            throw new \Exception("Erro ao deletar", 500);
        }
    }
}