<?php

    namespace App\Model\Entidades;

    use App\Model\DAO\UsuarioDAO;

    class Usuario 
    {
        private $fistName;
        private $lastName;
        private $email;
        private $password;
        private $birthDate;
        private $registrationDate;
        private $region; //endereço futuramente
        private $File;

        
        
        
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEmail ($email){
            $this->email = $email;
        }

        public function setpassword ($password){
            $this->password = $password;
        }

        


    }




?>