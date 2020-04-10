<?php
    
    namespace App\Lib;

    class Session {

        public static function setMessage($messagem){
            $_SESSION['message'] = $messagem;
        }
        
        public static function clearMessage(){
          unset(  $_SESSION['message']);
        }

        public static function getMessage(){
            return ($_SESSION['message'])?$_SECTION['message']:"";
        }

        public static function recordsetForm($form){
            $_SESSION['form'] = $form;
        }

        public static function clearForm(){
            unset($_SESSION['form']);
        }

        public static function getValorForm($key){
            return ($_SECTION['form'][$key])?$_SECTION['form'][$key]:"";
        }
        public static function getForm($key){
            return ($_SECTION['form'])?$_SECTION['form']:"";
        }



    }

?>