<?php

    namespace App\Controllers;

    use App\Model\DAO\UserDAO;
    use App\Model\Entities\User;
    use App\Lib\Session;

    class UserController extends Controller
    {  
        
        public function index(){ // aqui pode ser o index ou a home da aplicação para usuário etc 
            header('Location: http://'.APP_HOST); // ao redirecionar a url o htaccess renvia os dados para o index indo para a home

        }
        

        public function login(){
            $this->render('user/login');
            Session::clearMessage();
            Session::clearForm();
        }
        public function register(){
            $this->render('user/register');
            Session::clearMessage();
            Session::clearForm();
        }

        public function save(){

            $user = new User();
            $fieldError= [];
            Session::setForm($_POST);
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

            if(!$user->setEmail($email)){
                $fieldError['email'] = true; // por que não mandar o email?
            }
            if(!$user->setPassword($password, $repPassword)){
                $fieldError['password'] = true; 
            }
            if(!$user->setFistName($fistName)){
                $fieldError['fistName'] = true; 
            }
            if(!$user->setLastName($lastName)){
                $fieldError['lastName'] = true; 
            }
            if(!$user->setBirthDate($birthDate)){
                $fieldError['birthDate'] = true; 
            }
            if(!$user->setRegion($region)){
                $fieldError['region'] = true; 
             
            }
            if(!$user->setFile($file)){
                $$fieldError['file'] = true; 
            }
           if(isset($fieldError )){   
                if(count($fieldError) > 0){
                    //se houver erros mando de volta para login
                    $this->setviewVar('fieldError',$fieldError);
                    Session::setMessage("Os dados em vermelho estão incorretos por favor verifique os dados e tente novamente!");
                    header('Location: http://'.APP_HOST.'user/register');//redirecionar url para aparecer como cadastro a tela
                    $this->render('user/register');
                    Session::clearMessage();
                    Sessio::clearForm();
                    return;
                }
            }
            if($user->salvar()){
                Session::setMessage($user->getFistName());
                $this->render('user/success');
                Session::clearMessage();
                Sessio::clearForm();
            }else{
                Session::setMessage("Erro Ao gravar, por favor tente novamente mais tarde");
            }
        }
    }
?>