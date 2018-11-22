<?php

namespace App\Models\DAO;


use App\Models\Entidades\usuario;

class usuarioDAO extends BaseDAO
{
    public function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM usua WHERE usua_id = $id"
            );

            return $resultado->fetchObject(usuario::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM usua '
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, usuario::class);
        }

        return false;
    }

    public function consultaLogin($Usua)
    {
      
      $login     =  $Usua->getUsua_login();
      $password  =  $Usua->getUsua_password();

      $resultado = $this->select(
          "SELECT * FROM usua WHERE usua_login = '$login' and usua_password = '$password' "
      );
      return $resultado->fetchAll(\PDO::FETCH_CLASS, usuario::class);
    }

    public  function salvar(usuario $usuario) 
    {
        try {
          
          $usua_login     =  $usuario->getUsua_login();
          $usua_password  =  $usuario->getUsua_password();
          $usua_nome      =  $usuario->getUsua_nome();
          $usua_email     =  $usuario->getUsua_email();

          return $this->insert(
              'usua',
              " :usua_login,   
                :usua_password,
                :usua_nome,    
                :usua_email",
              [
                ':usua_login'=>$usua_login,
                ':usua_password'=>$usua_password,
                ':usua_nome'=>$usua_nome,
                ':usua_email'=>$usua_email   
              ]
          );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(usuario $usuario) 
    {
      $usua_id        = (int) $usuario->getUsua_id();
      $usua_login     =  $usuario->getUsua_login();
      $usua_password  =  $usuario->getUsua_password();
      $usua_nome      =  $usuario->getUsua_nome();
      $usua_email     =  $usuario->getUsua_email();

        return $this->update(
            'usua',
            " usua_id        =  :usua_id,
              usua_login     =  :usua_login,
              usua_password  =  :usua_password,
              usua_nome      =  :usua_nome,
              usua_email     =  :usua_email",
            [
              ':usua_id'      =>$usua_id,
              ':usua_login'   =>$usua_login,
              ':usua_password'=>$usua_password,
              ':usua_nome'    =>$usua_nome,
              ':usua_email'   =>$usua_email  
            ],
            "usua_id = :usua_id"
        );

    }

    public function excluir(usuario $usuario)
    {
      $id = $usuario->getUsua_id();

      return $this->delete('usua',"usua_id = $id");
    }
}