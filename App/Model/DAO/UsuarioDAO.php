<?php

    namespace App\Model\DAO;

    use App\Model\Entities\user;
    use DateTime;

    class userDAO extends BaseDAO 
    {
        public function checkEmail($email){

            try{
               $query =  $this->select(
                   
                "SELECT email FROM user WHERE email = '$email' "

                );
                return $query->fetch();
            }catch(Exception $e ){
                throw \Exception("Erro de acesso aos Dados", 500);
            }

        }

        public function save($user){
            $idAttachment = 1; // tratar coorretamente
            $registrationDate = '2020-04-10 14:30:30'; // tratar corretamente
            $fistName = $user->getFistName();
            $lastName = $user->getLastName();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $birthDate = $user->getBirthDate();
            $idRegion = $user->getRegion(); //inserir dados iniciais no banco
            
           
           
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