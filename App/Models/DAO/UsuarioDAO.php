<?php

namespace App\Models\DAO;


use App\Models\Entidades\Usuario;

class UsuarioDAO extends BaseDAO
{
    public function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM user WHERE user_id = $id"
            );

            return $resultado->fetchObject(Usuario::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM user '
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Usuario::class);
        }

        return false;
    }

    public  function salvar(Usuario $Usuario) 
    {
        try {
          
          $user_login     =  $Usuario->getUser_login();
          $user_password  =  $Usuario->getUser_password();
          $user_nome      =  $Usuario->getUser_nome();
          $user_email     =  $Usuario->getUser_email();

          return $this->insert(
              'user',
              " :user_login,   
                :user_password,
                :user_nome,    
                :user_email",
              [
                ':user_login'=>$user_login,
                ':user_password'=>$user_password,
                ':user_nome'=>$user_nome,
                ':user_email'=>$user_email   
              ]
          );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(Usuario $Usuario) 
    {
        try {

          $user_id        =  $Usuario->getUser_id();
          $user_login     =  $Usuario->getUser_login();
          $user_password  =  $Usuario->getUser_password();
          $user_nome      =  $Usuario->getUser_nome();
          $user_email     =  $Usuario->getUser_email();

            return $this->update(
                'user',
                "user_id        =  :user_id,
                 user_login     =  :user_login,
                 user_password  =  :user_password,
                 user_nome      =  :user_nome,
                 user_email     =  :user_email,",
                [
                 ':user_id'      =>$user_id,
                 ':user_login'   =>$user_login,
                 ':user_password'=>$user_password,
                 ':user_nome'    =>$user_nome,
                 ':user_email'   =>$user_email  
                ],
                "user_id = :user_id"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Usuario $Usuario)
    {
        try {
            $id = $Usuario->getUser_id();

            return $this->delete('user',"user_id = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao deletar", 500);
        }
    }
}