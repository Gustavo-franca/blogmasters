<?php

    namespace App\Lib;

    class Validation 
    {
        public static  function my_session_start(){
            $Validation = self::class;
            $validation = new $Validation();
            ini_set('session.use_strict_mode', 1);
            session_name('_asc');
            $validation->define_time();
            session_start();
        }
        public  static function my_session_verify(){
            if(session_status() != PHP_SESSION_ACTIVE){
                Validation::my_session_start();
            }
            if(isset($_SESSION['destroied'])){
                if($_SESSION['destroied'] < time() - 300 ){
                    //eliminar sessão
                    session_unset();
                    session_destroy();
                    session_write_close();
                    Validation::my_session_start();
                    //quando isso aocntecer posso disparar uma função que avalia o quais são as itenções do invasor e
                    //toma uma providencia quanto a isso
                }else{
                    $sessionId = session_id();
                    $session =  $_SESSION['new_session_id'];
                    session_unset();
                    session_destroy();
                    session_write_close();
                    session_id($session);
                    Validation::my_session_start();
                    if(isset($_SESSION['new_session_id']) || $sessionId != $_SESSION['old_session_id'] ){
                       //sessão mais antiga que a ultima
                       session_unset();
                       session_destroy();
                       session_write_close();
                       Validation::my_session_start();
                       //probabilidade alta de ataque desconectando todas as contas com este id
                    }
                }    
            }
        }

        public  static function my_session_renerate()
        {
            $Validation = self::class;
            $validation = new $Validation();
           //horario que a seção foi destruida
           if(session_status() != PHP_SESSION_ACTIVE){
               Validation::my_session_start();
           }
         
            $_SESSION['destroied'] = time();
            $_SESSION['new_session_id'] = session_create_id();
            $newSessionId = $_SESSION['new_session_id'];
            $oldSessionId = session_id();
            $session = $_SESSION;
            session_commit();
            //gerando nova sessão com id novo
            ini_set('session.use_strict_mode', 0);
            session_id($newSessionId);
            session_start();
            //garantido que o dado da session antiga não será perdido
            $_SESSION = $session;
            //deletando váriaveis desnecesarias
            unset($session);
            unset($_SESSION['destroied']);
            unset($_SESSION['new_session_id']);
            //armazenando id menos antiga
            $_SESSION['old_session_id'] = $oldSessionId;
            $validation->refresh_time();
        }
        private function define_time(){
            ini_set('session.gc_maxlifetime', SESSION_LIFE_TIME); // 7 dias
            session_set_cookie_params(SESSION_LIFE_TIME);
        }
        private function refresh_time($lifetime = SESSION_LIFE_TIME){
            //define o tempo máximo ativo
            $_SESSION['active_time'] = time();
            setcookie(session_name(),session_id(),time()+$lifetime,'/');
        }

    }



?>