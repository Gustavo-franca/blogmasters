<?php

    namespace App\Model\Entities;

    use App\Model\DAO\UserDAO;

    class User
    {  
        private $id;
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
            $this->DAO = new userDAO;
        }

        private function setid($id){
            if(!$this->id){
                if($id != false){
                    $this->id = $id;
                    return true;
                }
            }
            return false;
        }
        public function getId(){
            if($this->id){
                return $this->id;    
           } 
         }
        public function setEmail($email){
            if(!$this->DAO->checkEmail($email)){
                $this->email = $email;
                return true;
                //poderia salvar diretamente com risco de não gravar outros dados
                //tendo que deletar depois 
                //validando aqui não consigo usar essa função normalmente para manipular possiveis usuários ou usar login
            }
            $this->email = $email;
            return false;
        }

     

        public function setPassword($password){
            $this->password = $password;
            return true;
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
        public function save(){ 
            if($this->DAO->save($this)){
                return true;
            }
            return false;  
        }

        public function login(){
            if($this->setid($this->DAO->login($this))){
                return true;
            }
            return false;
        }
        


    }




?>