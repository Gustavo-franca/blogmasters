<?php

    namespace App\Model\DAO;

    use App\Model\Entidades\Usuario;

    class UsuarioDAO extends BaseDAO 
    {
        public function verificaEmail($email){

            try{
               $query =  $this->select(
                   
                "SELECT FROM user WHERE email = 'email' "

                );
                return $query->fetch();
            }catch(Exception $e ){
                throw \Exception("Erro de acesso aos Dados", 500);
            }

        }


    }


?>