<?php

    namespace App\Model\DAO;

    use App\Model\Entidades\Usuario;
    use DateTime;

    class UsuarioDAO extends BaseDAO 
    {
        public function verificaEmail($email){

            try{
               $query =  $this->select(
                   
                "SELECT email FROM user WHERE email = '$email' "

                );
                return $query->fetch();
            }catch(Exception $e ){
                throw \Exception("Erro de acesso aos Dados", 500);
            }

        }

        public function salvar($usuario){
            $idAttachment = 1;
            $registrationDate = '2020-04-10 14:30:30';
            $fistName = $usuario->getFistName();
            $lastName = $usuario->getLastName();
            $email = $usuario->getEmail();
            $password = $usuario->getPassword();
            $birthDate = $usuario->getBirthDate();
            $idRegion = $usuario->getRegion();
            
           
           
            return $this->insert(
                "User",
                " :fistName, :lastName, :email, :password, :birthDate, :registrationDate, :idAttachment, :idRegion",
                [
                    ':fistName'=>$fistName,
                    ':lastName'=>$lastName,
                    ':email'=>$email,
                    ':password'=>$password,
                    ':birthDate'=>$birthDate,
                    ':registrationDate'=>$registrationDate,
                    ':idAttachment'=>$idAttachment,
                    ':idRegion'=>$idRegion
                ]
            );
          
        }


    }


?>