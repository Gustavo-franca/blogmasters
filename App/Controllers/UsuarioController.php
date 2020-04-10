<?php

    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\Model\DAO\UsuarioDAO;

    class UsuarioController extends Controller
    {  
        
        public function index(){ // aqui pode ser o index ou a home da aplicação para usuário etc 
            header('Location: http://'.APP_HOST.'home'); 

        }
        

        public function login(){
            $this->render('usuario/login');
        }
        public function cadastro(){
            $this->render('usuario/cadastro');
        }

        public function salvar(){

            $usuarioDAO = new UsuarioDAO();

            
        }

    }


?>