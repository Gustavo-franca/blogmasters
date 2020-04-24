<?php

    namespace App\Controllers;

    use App\Model\Entities\User;
    use App\Lib\Session;

    class DashboardController extends Controller
     {
         private $user;
        
        public function index(){
            $session = session_status();
            /*validar login */
            if(!isset($_SESSION['user'])){
                header('Status: 301 Moved Permanently', false, 301);
                header('Location: http://'.APP_HOST."/user/login");
                exit();
            }else{
                $arrayuser = Session::getvar('user');
                Session::shownav(false);
                $this->render('dashboard/dashboard');
                Session::clearShowNav();
                return;
            }
        }

        public function exit(){
            if(session_status() == PHP_SESSION_ACTIVE){
                session_destroy();
                session_write_close();
            }
            header('Status: 301 Moved Permanently', false, 301);
            header('Location: http://'.APP_HOST."/user/login");
            exit();
        }


    }


?>