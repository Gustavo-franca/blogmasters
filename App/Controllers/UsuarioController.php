<?php

    namespace App\Controllers;

    use App\Model\DAO\UsuarioDAO;
    use App\Model\Entidades\Usuario;
    use App\Lib\Session;

    class UsuarioController extends Controller
    {  
        
        public function index(){ // aqui pode ser o index ou a home da aplicação para usuário etc 
            header('Location: http://'.APP_HOST.'home'); 

        }
        

        public function login(){
            $this->render('usuario/login');
            Session::limpaMensagem();
            Session::limpaForm();
        }
        public function cadastro(){
            $this->render('usuario/cadastro');
            Session::limpaMensagem();
            Session::limpaForm();
        }

        public function salvar(){

            $usuario = new Usuario();
            $fieldError= [];
            Session::gravarForm($_POST);
            //informações de login
            $email = $_POST['nEmail'];
            $password = $_POST['nPassword'];
            $repPassword = $_POST['nRepPassword'];
            //informações Pessoais
            $fistName = $_POST['nFistName'];
            $lastName = $_POST['nLastName'];
            $birthDate = $_POST['nBirthDate'];
            $region = $_POST['nRegion'];
            //pesquisa de marketing
            $howDidYouKnowUs = $_POST['nHow'];
            $whyDoYouWorkToUs = $_POST['ndescrition'];
            //anexo de corriculo(pdf, docs ,text, png, jpg)
            $file = $_POST['nFile'];

            if(!$usuario->setEmail($email)){
                $fieldError['email'] = true; // por que não mandar o email?
            }
            if(!$usuario->setPassword($password, $repPassword)){
                $fieldError['password'] = true; 
            }
            if(!$usuario->setFistName($fistName)){
                $fieldError['fistName'] = true; 
            }
            if(!$usuario->setLastName($lastName)){
                $fieldError['lastName'] = true; 
            }
            if(!$usuario->setBirthDate($birthDate)){
                $fieldError['birthDate'] = true; 
            }
            if(!$usuario->setRegion($region)){
                $fieldError['region'] = true; 
             
            }
            if(!$usuario->setFile($file)){
                $$fieldError['file'] = true; 
            }
           if(isset($fieldError )){   
                if(count($fieldError) > 0){
                    //se houver erros mando de volta para login
                    $this->setviewVar('fieldError',$fieldError);
                    Session::gravarMensagem("Os dados em vermelho estão incorretos por favor verifique os dados e tente novamente!");
                    header('Location: http://'.APP_HOST.'usuario/cadastro');
                  //  header('Location : http://'.APP_HOST.'usuario/cadastro');
                    $this->render('usuario/cadastro');
                   
                    return;
                }
            }
            if($usuario->salvar()){
                Session::gravarMensagem($usuario->getFistName());
                $this->render('usuario/sucesso');
            }else{
                Session::gravarMensagem("Erro Ao gravar, por favor tente novamente mais tarde");
            }
        }

    }


?>