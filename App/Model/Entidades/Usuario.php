<?php

    namespace App\Model\Entidades;

    use App\Model\DAO\UsuarioDAO;

    class Usuario 
    {  
        private $email;
        private $password;
        private $fistName;
        private $lastName;
        private $birthDate;
        private $registrationDate; // informação colocada ao inserir  utilizar o método insert
        private $region; //endereço futuramente
        private $file;
        private $DAO;

        public function __construct(){
            $this->DAO = new UsuarioDAO;
        }


        public function setEmail($email){
            if(!$this->DAO->verificaEmail($email)){
                $this->email = $email;
                return true;
                //poderia salvar diretamente com risco de não gravar outros dados
                //tendo que deletar depois 
            }
            return false;
        }

     

        public function setPassword($password, $repPassword){
            if($password == $repPassword){
                $this->password = $password;
                return true;
            }
            return false;
        }

        public function setFistName($fistName){
            if($fistName != null){
                $this->fistName = $fistName;
                return true;
            }
            return false;
        }
        public function setLastName($lastName){
            if($lastName != null){
                $this->lastName = $lastName;
                return true;
            }
            return false;
        }

        public function setBirthDate($birthDate){
            if($birthDate != null){
                $this->birthDate = $birthDate;
                return true;
            }
            return false;  
        }
        
             
        public function setRegion($region){
            if($region != null){//posso validar se essa região existe
                $this->region = $region;
                return true;
            }
            return false;  
        }

    
        public function setFile($file){ // como fazer
            if($file != null){//posso validar se essa região existe  
             $this->file = $file;
                return true;
            }
            return false;  
        }
        
        public function getEmail (){
            return $this->email;
        }
        public function getPassword (){
            return $this->password;
        }
        public function getFistName (){
            return $this->fistName;
        }
        public function getLastName (){
            return $this->lastName;
        }
        public function getBirthDate (){
            return $this->birthDate;
        }
        public function getRegion (){
            return $this->region;
        }
        public function getFile (){
            return $this->file;
        }
        public function salvar(){ // como fazer
            if($this->DAO->salvar($this)){//posso validar se essa região existe  
                return true;
            }
            return false;  
        }
        


    }




?>