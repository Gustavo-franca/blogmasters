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
        public function verify(){
            if(isset($_POST['nEmail']) && isset($_POST['nPassword'])){
                $user = new user();
                $user->setEmail($_POST['nEmail']);
                $user->setpassword($_POST['nPassword'],$_POST['nPassword']);
                if($user->login()){
                    Session::setvar('user',array(
                        'id'=> $user->getid(),
                        'fistName'=> $user->getfistName(),
                        'lastName'=> $user->getlastName(),
                        'email' => $user->getemail(),
                    ));
                    session_write_close();
                    header('Status: 301 Moved Permanently', false, 301);
                    header('Location: http://'.APP_HOST."dashboard");
                    exit();
                }else{
                    $this->render('user/login');
                    return;
                }
            }
            Session::setMessage('Opa, Temos um bisbiliotão aqui');
            Session::showNav(false);
            $this->render('error/404');
            Session::clearShowNav();
            Session::clearMessage();
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
                    Session::clearForm();
                    return;
                }
            }
            if($user->save()){
                Session::setMessage($user->getFistName());
                $this->render('user/success');
                Session::clearMessage();
                Session::clearForm();
            }else{
                Session::setMessage("Erro Ao gravar, por favor tente novamente mais tarde");
            }
        }
    }
?>