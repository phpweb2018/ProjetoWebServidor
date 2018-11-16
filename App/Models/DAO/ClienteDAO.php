<?php

namespace App\Models\DAO;


use App\Models\Entidades\Cliente;

class ClienteDAO extends BaseDAO
{
    public function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM clie WHERE clie_codi = $id"
            );

            return $resultado->fetchObject(Cliente::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM clie '
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Cliente::class);
        }

        return false;
    }

    public function listarClieCombo()
    {
      $resultado = $this->select(
          'SELECT clie_codi, clie_nome FROM clie'
      );
      
      return $resultado->fetchAll(\PDO::FETCH_CLASS, Cliente::class);
       
    }

    public  function salvar(Cliente $Cliente) 
    {
      $Clie_nome  =  $Cliente->getClie_nome();
      $Clie_emai  =  $Cliente->getClie_emai();
      $Clie_nofa  =  $Cliente->getClie_nofa();
      $Clie_tele  =  $Cliente->getClie_tele();
      $Clie_cnpj  =  $Cliente->getClie_cnpj();
      $Clie_tipo  =  $Cliente->getClie_tipo();
      $Clie_situ  = (int) $Cliente->getClie_situ();
      $Clie_dtco  =  $Cliente->getClie_dtco();
      $Clie_logr  =  $Cliente->getClie_logr();
      $Clie_nume  = (int) $Cliente->getClie_nume();
      $Clie_bair  =  $Cliente->getClie_bair();
      $Clie_copl  =  $Cliente->getClie_copl();
      $Clie_cida  =  $Cliente->getClie_cida();
      $Clie_esta  =  $Cliente->getClie_esta();
      $Clie_obse  =  $Cliente->getClie_obse();

      $Clie_dtco = implode("-", array_reverse(explode("/", trim($Clie_dtco))));

      return $this->insert(
          'clie',
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
    }

    public  function atualizar(Cliente $Cliente) 
    {
    $Clie_codi  =  $Cliente->getClie_codi();
    $Clie_nome  =  $Cliente->getClie_nome();
    $Clie_emai  =  $Cliente->getClie_emai();
    $Clie_nofa  =  $Cliente->getClie_nofa();
    $Clie_tele  =  $Cliente->getClie_tele();
    $Clie_cnpj  =  $Cliente->getClie_cnpj();
    $Clie_tipo  =  $Cliente->getClie_tipo();
    $Clie_situ  = (int) $Cliente->getClie_situ();
    $Clie_dtco  =  $Cliente->getClie_dtco();
    $Clie_logr  =  $Cliente->getClie_logr();
    $Clie_nume  = (int) $Cliente->getClie_nume();
    $Clie_bair  =  $Cliente->getClie_bair();
    $Clie_copl  =  $Cliente->getClie_copl();
    $Clie_cida  =  $Cliente->getClie_cida();
    $Clie_esta  =  $Cliente->getClie_esta();
    $Clie_obse  =  $Cliente->getClie_obse();
    $Clie_dtco = implode("-", array_reverse(explode("/", trim($Clie_dtco))));

      return $this->update(
          'Clie',
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
    }

    public function excluir(Cliente $Cliente)
    {
        $id = (int) $Cliente->getClie_Codi();

        return $this->delete('Clie',"Clie_codi = $id");
    }
}