<?php
    
    namespace App\Lib;

    class Session {
        

        public static function setVar($name,$value){
            $_SESSION[$name] = $value;
        }
        public static function getVar($name){
            return ($_SESSION[$name])?$_SESSION[$name]:"";
        }
        public static function showNav($bool){
            $_SESSION['nav'] = $bool;
        }
        public static function getshownav(){
            return (isset($_SESSION['nav']))?$_SESSION['nav']:true;
        }
        public static function clearShowNav(){
            unset( $_SESSION['nav']);
        }
        public static function setMessage($messagem){
            $_SESSION['message'] = $messagem;
        }
        
        public static function clearMessage(){
          unset(  $_SESSION['message']);
        }

        public static function getMessage(){
            return ($_SESSION['message'])?$_SESSION['message']:"";
        }

        public static function setForm($form){
            $_SESSION['form'] = $form;
        }

        public static function clearForm(){
            unset($_SESSION['form']);
        }
        public static function getValorForm($key){
            return ($_SESSION['form'][$key])?$_SESSION['form'][$key]:"";
        }
        public static function getForm($key){
            return ($_SESSION['form'])?$_SESSION['form']:"";
        }
    }

?>